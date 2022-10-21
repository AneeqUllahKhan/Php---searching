<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    <h3 >Search Record</h3>
    <hr style="border-top:1px dotted #ccc;"/>
    <form method="POST" action="add.php">
    <div class="form-inline">
    <input type="text" name="name" class="form-control" placeholder="Name" required/>
    <input type="text" name="author" class="form-control" placeholder="Author" required/>
    <button name="add"><span></span> Save Book</button>
    </div>
    </form>
    <br />
    <form method="POST" action="">
    <div >
    <input class="text-justify" type="text" class="form-control" name="keyword" placeholder="Search
    here..." required/>
    <button name="search"><span class="glyphicon glyphicon-search"></span> Search</button>
    </div>
    </form>
    <br /><br />
    <?php include('search_book.php')?>
</body>
</html>