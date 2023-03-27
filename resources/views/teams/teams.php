<html>
    <head>
        <title>Teams</title>
    </head>
    <body>
        <h1>Teams</h1>                                
        <a href="/"><input type="button" value="Back"></a>

        <?php $link = new PDO('mysql:host=127.0.0.1;dbname=dss', 'dss', 'dss'); ?>
        <table class="table table-striped">
  	
            <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>SHORT NAME</th>
                <th>DESCRIPTION</th>
                <th>PICTURE</th>
                <th>COUNTRY</th>
                <th>DIVISION</th> 
                <th>ACCIONES</th>
                
            </tr>
            </thead>
            <?php foreach ($link->query('SELECT * from teams') as $row){  ?> 
            <tr>
                <td><?php echo $row['id']   ?></td>
                <td><?php echo $row['name'] ?></td>                
                <td><?php echo $row['short_name'] ?></td>
                <td><?php echo $row['description'] ?></td>
                <td><?php echo $row['picture'] ?></td>
                <td><?php echo $row['country'] ?></td>
                <td><?php echo $row['division'] ?></td>
                <td><a href="#"><input type="button" value="Eliminar"></a>  <a href="#"><input type="button" value="Modificar"></a>  <a href="#"><input type="button" value="Añadir"></a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>