<?php

namespace App\Http\Controllers;

use App\Models\Token;
use Illuminate\Support\Str;
use App\Models\VotingParticipant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TokenController extends Controller
{
    /**
     * HALAMAN TOKEN
     */
    public function index()
    {
        $tokens = Token::latest()->get();

        return view('token.index', compact('tokens'));
    }

    /**
     * GENERATE TOKEN
     */
    public function generate()
    {
        Token::create([

            'user_id' => Auth::id(),

            'token' => 'EVT' . strtoupper(Str::random(13)),

            'is_used' => false,

        ]);

        return back()->with(
            'success',
            'Token berhasil dibuat!'
        );
    }

    /**
     * VERIFY TOKEN
     */
    /**
     * VERIFY TOKEN
     */
    public function verify($token)
    {
        // cek token
        $tokenData = Token::where(
            'token',
            $token
        )->first();

        if (!$tokenData) {

            abort(404, 'Token tidak ditemukan');

        }

        // harus login dulu
        if (!Auth::check()) {

            return redirect('/login')
                ->with(
                    'error',
                    'Silakan login terlebih dahulu.'
                );
        }

        // cek peserta
        $participant = VotingParticipant::where(
            'user_id',
            Auth::id()
        )->first();

        // kalau belum ada peserta
        if (!$participant) {

            VotingParticipant::create([

                'user_id' => Auth::id(),

                'status' => 'approved'

            ]);

        } else {

            // otomatis approve
            $participant->update([
                'status' => 'approved'
            ]);

        }

        return redirect('/vote')->with(
            'success',
            'QR Token berhasil diverifikasi. Kamu sekarang bisa voting!'
        );
    }
}