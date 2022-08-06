<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
            <title>Login</title>
</head>
<body>
            <form>
                         <table border="0">
                                    <tr>
                                                <td>Nama Lengkap</td>
                                                <td>: <input type="text" name="nama_user"></td>
                                    </tr>
                                    <tr>
                                                <td>NIM</td>
                                                <td>: <input type="text" name="nim"></td>
                                    </tr>
                                    <tr>
                                                <td>Program Studi</td>
                                                <td>: <select name="prodi">
                                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                                            <option value="Sistem Informasi">Sistem Informasi</option>
                                                     </select>
                                                </td>
                                    </tr>
                                    <td>Alamat</td>
                                    <td>: <textarea name="alamat" cols="4" rows="2"></textarea>
                                    </td>
                                    </tr>
                                    <tr>
                                                <td>Nama User</td>
                                                <td>: <input type="text" name="namauser"></td>
                                    </tr>
                                    <tr>
                                                <td>Password</td>
                                                <td>: <input type="password" name="password"></td>
                                    </tr>
                                    <tr>
                                                <td>&nbsp;</td>
                                                <td><input type="submit" value="Simpan"></td>
                                    </tr>
                        </table>
            </form>
</body>
</html>