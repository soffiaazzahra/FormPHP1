<!DOCTYPE html>
<html>
    <head>
       <title>Formulir</title> 
    </head>
    <body>
       <h1>Buat Account Baru</h1> 
       <h2>Sign Up Form</h2>
<form method="POST" action="soalform3.php">
       <label for="name">First name: </label><br>
       <input type="text" name="First_name" /><br>
       <label for="name">Last name: </label><br>
       <input type="text" name="Last_name" /><br>

       <p>Gender</p>
       <input type="radio" name="jk" value="Male" required />
       <label for="Male">Male </label><br>
       <input type="radio" name="jk" value="Female" required />
       <label for="Female">Female </label>
    
       <p>Nationality</p>
       <label for="Nationality">Pilih Kewarganegaraan:</label>
       <select name="Nationality" id="country">
        <option value="Indonesia">Indonesia</option>
        <option value="English">English</option>
        <option value="Jepang">Jepang</option>
       </select>

       <p>Language Spoken</p>
       <input type="checkbox" name="bahasa[]" value="Bahasa Indonesia"> Bahasa Indonesia
       <label for="Bahasa Indonesia"></label><br>
       <input type="checkbox" name="bahasa[]" value="Bahasa Inggris"> Bahasa Inggris
       <label for="Bahasa Inggris"></label><br>
       <input type="checkbox" name="bahasa[]" value="Bahasa Jepang"> Bahasa Jepang
       <label for="Bahasa Jepang"></label><br>
      
       <p>Bio</p> 

       <textarea rows='10' cols='60' name = "Bio"></textarea>
       <div>
       <button>Sign Up</button>
       </div>
</form>
    </body>
</html>