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
<title>list member G-Cloud-Storage</title>
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
  <table border="2" cellpadding="30" cellspacing="5"> 
<tr>
    <th>
        <h3>Jenis Member </h3>
    </th>
    <th>
        <h3>Nama User</h3>
    </th>
    <th>
        sisa aktif [per Bulan]
    </th>
    <th>
        hosting
    </th>
</tr>
<tr>
<td>
Premium
</td>

<td>
Admin 3
</td>

<td>
12 bulan
</td>

<td>
paket keluarga super
</td>
</tr>



<tr>
<td>
Platinum
</td>

<td>
dev 7
</td>

<td>
12 bulan
</td>

<td>
paket reguler gold
</td>
</tr>






<tr>
<td>
Bronze
</td>

<td>
web dev 12
</td>

<td>
12 bulan
</td>

<td>
ujicoba
</td>
</tr>






<tr>
<td>

</td>

<td>

</td>

<td>

</td>

<td>

</td>
</tr>





<tr>
<td>

</td>

<td>

</td>

<td>

</td>

<td>

</td>
</tr>















</table>
</div>

</body>
</html>
