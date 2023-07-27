<?php 
include "header.php"; 
error_reporting(0);
?>

<body class="d-flex align-items py-100 bg-body-tertiary" cz-shortcut-listen="true">

    <main class="form-submit w-10 m-auto">
        <form action="adduserfile.php" method="post" enctype="multipart/form-data">
            <div class="position">
                <h1 class="h3 mb-3 fw-normal">Fill Up Form</h1>
                <!-- USER NAME -->
                <div class="form-floating">
                    <input type="text" class="form-control" id="name" name="getname" >
                    <label for="name">Name</label>
                </div>
                <!-- USER EMAIL -->
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="getemail">
                    <label for="email">Email address</label>
                </div>
                <!-- USER FILE -->
                <div class="form-file text-start my-3">
                    <input class="form-file-input" type="file" id="getfile" name="uploadfile" onchange="preview_image(event)">
                    <img id="image" width="50px">
                </div>
                <input class="btn btn-dark w-100 py-2" type="submit" name="submit" value="Upload File">
            </div>
        </form>
    </main>
</body>

</html>

