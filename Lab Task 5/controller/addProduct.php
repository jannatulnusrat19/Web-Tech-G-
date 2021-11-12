
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <div   class="container">
            <br/>
            <fieldset>
            <h3>Add Product</h3>
            <br/>
        <form action="controller/insert.php" name="form" method="post">
            <label>Name:</label>
            <input type="text" name="pName"/> <br/>
            <br/>
            <label>Buying Price:</label>
            <input type="text" name="bPrice"/><br/>
            <br/>
            <label>Selling Price:</label>
            <input type="text" name="sPrice"/><br/>
            
            <hr>
            <input type="checkbox" name="checkbox"><a>Display</a><br/>
    
            <hr>
            <input type="submit" name="submit" value="Save">
            <br>
            </fieldset>
        </form>

    </div>
 
    
</body>
</html>
