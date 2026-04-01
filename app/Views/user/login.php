<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
body {
    margin: 0;
    height: 100vh;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #1e3c72, #2a5298);
    display: flex;
    justify-content: center;
    align-items: center;
}

.login-box {
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    padding: 40px;
    border-radius: 15px;
    width: 320px;
    color: white;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

h2 {
    margin-bottom: 20px;
}

input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 8px;
    border: none;
}

button {
    width: 100%;
    padding: 10px;
    background: #00c6ff;
    border: none;
    border-radius: 8px;
    color: white;
    font-weight: bold;
    cursor: pointer;
}

button:hover {
    background: #0072ff;
}

.alert {
    background: #ff4d4d;
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 10px;
}
</style>
</head>
<body>

<div class="login-box">
    <h2>🔐 Login Admin</h2>

    <?php if(session()->getFlashdata('flash_msg')): ?>
        <div class="alert"><?= session()->getFlashdata('flash_msg') ?></div>
    <?php endif; ?>

    <form method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Masuk</button>
    </form>
</div>

</body>
</html>