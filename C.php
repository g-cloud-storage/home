<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #006bf8;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #eaeaea;
  color: black;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 500px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
<link rel="shortcut icon" href="favicon.ico" type="x-icon">
<title>Home G-Cloud-Storage</title>
</head>
<body>

<div class="sidebar">
  <a class="active" href="index.html">Home</a>
  <a href="reguler-ind.html" target="reguler-ind.html">paket reguler</a>
  <a href="family.html" target="family.html">paket keluarga</a>
  <a href="pelajar.html" target="pelajar.html">paket pelajar</a>
  <a href="bisnis.html" target="bisnis.html">paket bisnis</a>
  <a href="berangkas.html" target="berangkas.html">paket berangkas</a>
  <a href="C.php" target="C.php">Custom Storage</a>
  <a href="app-pc.html" target="app-pc.html">download apk</a>
  <a href="update-ind.html" target="update-ind.html">update</a>
  <a href="peraturan.html" target="peraturan.html">peraturan⚙️</a>
  <a href="member.html" target="member.html">Join Member</a>
  <a href="about.html" target="about.html">About</a>
</div>

<div class="content">
Silakan Daftar Dibawah Ini
 <br>
 <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfa0CjPBLkAy3Eb5akaSTnuwUBZYoK37-0k5YcKpBidf8nmfw/viewform?embedded=true" 
 width="640" height="1321" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
</div>

</body>
</html>
