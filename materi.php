<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing:border-box
padding:0;
margin: 0;}



ul{
    list-style-type: none;
    margin: 0px;
    padding: 0px;
    overflow: hidden;
    background-color: #333;
}

li a.login{
    float: right;
}
li a:hover {
      background-color: #ffff;
      color: black;
  }
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.login {
    background-color: #4CAF50;
    padding: 35px;
    font-size: 20px;
  }
#logo img{
  float: left;
  padding: 10px;
}
body{
    background-color: #d6d6c2;
  }
ul{
    list-style-type: none;
    margin: 0px;
    padding: 0px;
    overflow: hidden;
    background-color: #333;
}
</style>
</head>
<body>
<form name='form_materi' method=POST action='$aksi?module=materi&act=input_materi' enctype='multipart/form-data'>
     <fieldset>
     <legend>Tambah Materi</legend>
     <dl class='inline'>
    <dt><label>Judul</label></dt>        
          <dd><input type=text name='judul' size=50></dd>
        
    <dt><label>Pelajaran</label></dt>        
      <dd><div id='pelajaran'></div></dd>
    <dt><label>File</label></dt>              
     <dd><input type=file name='fupload' size=40></dd>
    </dl>
          
          <p align=center><input class='button blue' type=submit value=Simpan>
          <input class='button blue' type=button value=Batal onclick=self.history.back()></p>
          
          </fieldset></form>
    </tr>
  </tbody>
</body>
</html>
