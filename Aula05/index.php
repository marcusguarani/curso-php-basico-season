<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            
            <h1> Validação de dados</h1>
            
                     
            <?php include('partials/notice.php')?>            
           
            
            <form action="string.php" method="POST">
                  <label>Nome:</label>
                  <input type="text" name="nome" class="form-control"/>
                  
                  <br />
                  <label>Linguagens:</label>                      
                  <select name="linguagem[]" class="form-control"  multiple="">
                      <option value="JAVA">JAVA</option> 
                      <option value="PHP">PHP</option>
                      <option value="PHYTON">PHYTON</option>
                  </select>
                  <br/>
                  
                  <label>Sabe PHP</label>
                  <br />
                  SIM: <input type="radio" name="conhecimento" value="1" checked="">
                  NÃO: <input type="radio" name ="conhecimento" value="0">
                  <br/>
                  <br/>
                  
                  <label>Quais linguagens eu sei</label>
                  <br />
                  <label>JAVA</label>
                  <input type="checkbox" name ="php[]" value="JAVA">
                  <br />
                  <label>PHP</label>
                  <input type="checkbox" name ="php[]" value="PHP">
                  <br />
                  <label>PHYTON</label>
                  <input type="checkbox" name ="php[]" value="PHYTON">
                  <br />
                  <br />
                  <input type="submit" class="btn btn-primary">
            </form>              
            
        </div>
    </body>
</html>
