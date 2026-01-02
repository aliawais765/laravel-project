<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Futuristic Animated Login</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<style>
  * { margin:0; padding:0; box-sizing:border-box; font-family:'Roboto', sans-serif; }

  body, html {
    width:100%;
    height:100%;
    overflow:hidden;
    background: #0a0a0a;
  }

  canvas {
    position:absolute;
    top:0;
    left:0;
    z-index:1;
  }

  /* Login Box */
  .login-container {
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    background: rgba(0,0,0,0.85);
    padding:60px 50px;
    border-radius:30px;
    box-shadow: 0 0 50px rgba(0,255,255,0.3);
    width:380px;
    text-align:center;
    color:#fff;
    z-index:10;
  }

  .login-container h1 {
    font-size:2.2rem;
    margin-bottom:30px;
    background: linear-gradient(90deg, #00f0ff, #ff00ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .login-container input {
    width:100%;
    padding:15px 20px;
    margin:15px 0;
    border:none;
    border-radius:15px;
    background: rgba(255,255,255,0.05);
    color:#fff;
    font-size:1rem;
    outline:none;
    transition:0.3s;
  }

  .login-container input:focus {
    background: rgba(255,255,255,0.15);
    box-shadow: 0 0 15px #00f0ff;
  }

  .login-container button {
    width:100%;
    padding:15px;
    margin-top:20px;
    border:none;
    border-radius:20px;
    background: linear-gradient(90deg, #00f0ff, #ff00ff);
    color:#fff;
    font-size:1rem;
    cursor:pointer;
    transition:0.3s;
    position:relative;
    overflow:hidden;
  }
  .login-container button::after {
    content:'';
    position:absolute;
    left:-50%;
    top:0;
    width:50%;
    height:100%;
    background: rgba(255,255,255,0.3);
    transform: skewX(-20deg);
    transition: 0.5s;
  }
  .login-container button:hover::after {
    left:150%;
  }
</style>
</head>
<body>

<canvas id="bgCanvas"></canvas>

<div class="login-container">
  <h1>Sign In</h1>
  <input type="text" placeholder="Username" id="username">
  <input type="password" placeholder="Password" id="password">
  <button id="loginBtn">Login</button>
</div>

<script>
  // Canvas Setup
  const canvas = document.getElementById('bgCanvas');
  const ctx = canvas.getContext('2d');
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  let particlesArray = [];
  const colors = ['#00f0ff','#ff00ff','#00ff99','#ff3cac'];

  // Particle Class
  class Particle {
    constructor(){
      this.x = Math.random()*canvas.width;
      this.y = Math.random()*canvas.height;
      this.size = Math.random()*3+1;
      this.speedX = Math.random()*1-0.5;
      this.speedY = Math.random()*1-0.5;
      this.color = colors[Math.floor(Math.random()*colors.length)];
    }
    update(){
      this.x += this.speedX;
      this.y += this.speedY;

      if(this.x < 0 || this.x > canvas.width) this.speedX *= -1;
      if(this.y < 0 || this.y > canvas.height) this.speedY *= -1;
    }
    draw(){
      ctx.fillStyle = this.color;
      ctx.beginPath();
      ctx.arc(this.x,this.y,this.size,0,Math.PI*2);
      ctx.fill();
    }
  }

  function init(){
    particlesArray = [];
    for(let i=0;i<200;i++){
      particlesArray.push(new Particle());
    }
  }

  function connect(){
    for(let a=0;a<particlesArray.length;a++){
      for(let b=a;b<particlesArray.length;b++){
        let dx = particlesArray[a].x - particlesArray[b].x;
        let dy = particlesArray[a].y - particlesArray[b].y;
        let distance = Math.sqrt(dx*dx + dy*dy);
        if(distance < 120){
          ctx.strokeStyle = 'rgba(255,255,255,0.05)';
          ctx.lineWidth = 1;
          ctx.beginPath();
          ctx.moveTo(particlesArray[a].x, particlesArray[a].y);
          ctx.lineTo(particlesArray[b].x, particlesArray[b].y);
          ctx.stroke();
        }
      }
    }
  }

  function animate(){
    ctx.clearRect(0,0,canvas.width,canvas.height);
    particlesArray.forEach(p => { p.update(); p.draw(); });
    connect();
    requestAnimationFrame(animate);
  }

  window.addEventListener('resize', ()=>{
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    init();
  });

  init();
  animate();

  // Login Button Interaction
  const loginBtn = document.getElementById('loginBtn');
  const username = document.getElementById('username');
  const password = document.getElementById('password');

  loginBtn.addEventListener('click', ()=>{
    if(username.value && password.value){
      loginBtn.textContent='Success ✅';
      loginBtn.style.background='linear-gradient(90deg, #00ff99,#00ccff)';
      setTimeout(()=>{ loginBtn.textContent='Login'; loginBtn.style.background='linear-gradient(90deg,#00f0ff,#ff00ff)'; },2000);
    } else {
      loginBtn.textContent='Error ❌';
      loginBtn.style.background='linear-gradient(90deg,#ff3c3c,#ff0000)';
      setTimeout(()=>{ loginBtn.textContent='Login'; loginBtn.style.background='linear-gradient(90deg,#00f0ff,#ff00ff)'; },2000);
    }
  });
</script>

</body>
</html>
