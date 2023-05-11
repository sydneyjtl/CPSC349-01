<?php include("table.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Collection</title>
        <link rel="stylesheet" href="style.css">
        <script>
            const blobToImage = (blob) => {
                return new Promise(resolve => {
                    const url = URL.createObjectURL(blob)
                    let img = new Image()
                    img.onload = () => {
                        URL.revokeObjectURL(url)
                        resolve(img)
                    }
                img.src = url
                })
            }
        </script>
    </head>
    <body>
        <ul>
            <li class="left"><a href="./home.html">HOME</a></li>
            <li class="left"><a class="active" href="./collection.html">COLLECTION</a></li>
            <li class="left"><a href="./upload.html">UPLOAD</a></li>
        </ul>

    <div style = "padding:30px;text-align: center;">
        <h1>MY COLLECTION</h1>
        <table>
            <?php 
                while($rows=$result->fetch_assoc()) {
            ?>
                <tr>
                    <td>

                        <img src="image.php?ID=<?php echo $rows['ID'];?>" alt="CardImage" style="float:center;width:200px;">
                        <h3><?php echo $rows['CardName']; ?></h3><br>
                        <h4><?php echo $rows['CardOrigin']; ?></h4>
                        
                        
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <script>
        function editName() {
          let text = document.getElementById("cardName").value;
          document.getElementById("newName").innerHTML = text;
        }

        function editOrigin() {
            let text = document.getElementById("cardOrigin").value;
            document.getElementById("newOrigin").innerHTML = text;
          }
    </script>
    </body>
</html>