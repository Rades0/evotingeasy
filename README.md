<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Cyberpunk Portfolio</title>

<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background:#050816;
    overflow:hidden;
    font-family:'Orbitron',sans-serif;
    color:white;
    height:100vh;
}

/* BACKGROUND */

.background{
    position:absolute;
    width:100%;
    height:100%;
    overflow:hidden;
    z-index:-2;
}

.glow{
    position:absolute;
    width:500px;
    height:500px;
    border-radius:50%;
    filter:blur(180px);
    opacity:.08;
    animation:float 8s ease-in-out infinite;
}

.glow1{
    background:#00e5ff;
    top:-120px;
    left:-120px;
}

.glow2{
    background:#7b2cff;
    bottom:-120px;
    right:-120px;
}

@keyframes float{
    0%{
        transform:translateY(0px);
    }
    50%{
        transform:translateY(40px);
    }
    100%{
        transform:translateY(0px);
    }
}

/* MOVING CYBER LINES */

.line{
    position:absolute;
    width:200%;
    height:65px;
    background:#f4b400;
    display:flex;
    align-items:center;
    white-space:nowrap;
    font-size:24px;
    font-weight:700;
    letter-spacing:4px;
    color:#000;
    opacity:.9;
}

.line1{
    top:35%;
    transform:rotate(12deg);
    animation:moveLeft 12s linear infinite;
}

.line2{
    top:55%;
    transform:rotate(-12deg);
    animation:moveRight 12s linear infinite;
}

@keyframes moveLeft{
    from{
        transform:translateX(0) rotate(12deg);
    }
    to{
        transform:translateX(-400px) rotate(12deg);
    }
}

@keyframes moveRight{
    from{
        transform:translateX(-400px) rotate(-12deg);
    }
    to{
        transform:translateX(0) rotate(-12deg);
    }
}

/* NAVBAR */

.nav{
    position:absolute;
    top:35px;
    width:100%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 50px;
}

.logo{
    font-size:20px;
    color:#00e5ff;
    font-weight:700;
}

.menu{
    width:65px;
    height:65px;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    border:1px solid rgba(255,255,255,.1);
    background:rgba(255,255,255,.03);
    backdrop-filter:blur(10px);
    font-size:30px;
}

/* CONTENT */

.container{
    width:100%;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
}

/* PROFILE */

.profile{
    width:250px;
    height:250px;
    border-radius:50%;
    padding:6px;
    background:linear-gradient(45deg,#00e5ff,#7b2cff,#ff00ff);
    animation:borderRotate 6s linear infinite;
    box-shadow:0 0 50px rgba(0,229,255,.25);
}

@keyframes borderRotate{
    from{
        filter:hue-rotate(0deg);
    }
    to{
        filter:hue-rotate(360deg);
    }
}

.profile img{
    width:100%;
    height:100%;
    border-radius:50%;
    object-fit:cover;
    border:8px solid #050816;
}

/* BADGE */

.badge{
    margin-top:30px;
    padding:14px 28px;
    border-radius:40px;
    background:rgba(255,255,255,.05);
    border:1px solid rgba(255,255,255,.08);
    backdrop-filter:blur(10px);
    display:flex;
    align-items:center;
    gap:12px;
}

.dot{
    width:12px;
    height:12px;
    background:#00ff66;
    border-radius:50%;
    box-shadow:0 0 15px #00ff66;
}

/* TEXT */

h1{
    margin-top:40px;
    font-size:70px;
    text-align:center;
}

h1 span{
    color:#00e5ff;
}

p{
    margin-top:18px;
    color:#b8b8b8;
    font-size:18px;
}

/* BUTTONS */

.buttons{
    margin-top:40px;
    display:flex;
    gap:20px;
}

.btn{
    padding:16px 34px;
    border-radius:40px;
    text-decoration:none;
    color:white;
    border:1px solid rgba(255,255,255,.1);
    background:rgba(255,255,255,.04);
    transition:.3s;
    backdrop-filter:blur(10px);
}

.btn:hover{
    transform:translateY(-5px);
    box-shadow:0 0 25px rgba(0,229,255,.25);
    border:1px solid #00e5ff;
}

/* FOOTER */

.footer{
    position:absolute;
    bottom:30px;
    width:100%;
    text-align:center;
    color:#666;
    font-size:14px;
}

</style>
</head>

<body>

<div class="background">

<div class="glow glow1"></div>
<div class="glow glow2"></div>

<div class="line line1">
E-VOTING — CYBERPUNK — LARAVEL — MODERN UI — CLEAN DESIGN —
E-VOTING — CYBERPUNK — LARAVEL — MODERN UI — CLEAN DESIGN —
</div>

<div class="line line2">
FUTURISTIC — SMOOTH ANIMATION — DARK MODE — PORTFOLIO —
FUTURISTIC — SMOOTH ANIMATION — DARK MODE — PORTFOLIO —
</div>

</div>

<!-- NAVBAR -->

<div class="nav">

<div class="logo">
⚡ RADES0
</div>

<div class="menu">
☰
</div>

</div>

<!-- CONTENT -->

<div class="container">

<div class="profile">

<img src="https://wallpapercave.com/wp/wp11740801.jpg">

</div>

<div class="badge">
<div class="dot"></div>
Available for Work
</div>

<h1>Hi, I'm <span>Rades0</span></h1>

<p>
Cyberpunk Laravel Developer
</p>

<div class="buttons">

<a href="#" class="btn">
GitHub
</a>

<a href="#" class="btn">
Project
</a>

</div>

</div>

<div class="footer">
⚡ CLEAN • MODERN • CYBERPUNK ⚡
</div>

</body>
</html>