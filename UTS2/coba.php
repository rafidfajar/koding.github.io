<tr>
            <td>
                    <label for="exampleFormControlSelect1">Pilih Kartu</label>
                    <select class="form-control" id="pilih" name="pilih">
                      <option>Kartu Debit Blue</option>
                      <option>Kartu Debit Gold</option>
                      <option>Kartu Debit Platinum</option>
                      <option>Kartu Debit Black</option>
                      </select>
              </td>
            </tr>
            <?php
            if(isset($_POST['input'])){
                $nama = $_POST['nama'];
                $nik = $_POST['nik'];
                $alamat = $_POST['alamat'];
                $pilih = $_POST['pilih'];
                $password = md5($_POST['password']);
                $password = $_POST['pw'];

          
               echo" <div class='alert alert-success' role='alert'>
               Rekening anda telah di buat
              </div>";
            echo "<tr>
                  <td>1</td>
                  <td>Nama Lengkap</td>
                  <td>$nama</td>
              </tr>
              <tr class=table-danger>
                  <td>2</td>
                  <td>Nomor Induk Kependudukan </td>
                  <td>$nik</td>
              </tr>
              <tr>
                  <td>3</td>
                  <td>Alamat </td>
                  <td>$alamat</td>
              </tr>
              </tr>
              <tr class=table-danger>
              <td>4</td>
              <td>Username </td>
              <td>$username</td>
          </tr>
         
              <tr class=table-warning>
                  <td>4</td>
                  <td>Type Kartu </td>
                  <td>$pilih</td>
             ";
             
                
        
        }
        
            ?>
            <table id="example" class="table table-striped" style="width:100%;" border="3">
          <thead>
              <tr>
              <th>No</th>
            <th>Data</th>
            <th>Ket</th>
           
        </div>
      
      </div>
	    </div>
 
    
            </tbody>
    </table>