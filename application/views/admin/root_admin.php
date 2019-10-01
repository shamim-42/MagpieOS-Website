<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css');?>" />
    <title>Admin | MagpieOS</title>
</head>
<body>
    <div class="container-fluid bg-light">
        <div class="row justify-content-center py-3">
            <div class="col-12 py-3">
                <h1 class="text-center text-success">MagpieOS Admin Panel</h1>
            </div>
            <div class="col-md-10 py-5 form-group">         
                <!-- <label for="basic_info" class="font-weight-bold">Basic Info</label> -->
                <h3 class="font-weight-bold">Basic Info</h3>
                <div id="basic_info" class="p-md-3 bg-white rounded">
                    <form method="post" action="<?= base_url("save_basic_info"); ?>">
                        <label for="headline" class="text-primary">Headline</label>
                        <input id="headline" name="headline" type="text" class="form-control mb-2" placeholder="Organization Headline" value="<?php echo $value[0]->headline; ?>">

                        <label for="tagline" class="text-primary mt-3">Tagline</label>
                        <input id="tagline" name="tagline" type="text" class="form-control mb-2" placeholder="Tagline" value="<?php echo $value[0]->tagline; ?>">

                        <label for="what_magpieos_is" class="text-primary mt-3">What MagpieOS is ?</label>
                        <textarea name="what_magpieos_is" id="what_magpieos_is" rows="4" class="form-control mb-2" placeholder="What Magpieos is ?"> <?php echo $value[0]->what_magpieos_is; ?> </textarea>


                        <label for="about" class="text-primary mt-3">About</label>
                        <textarea name="about" id="about" rows="4" class="form-control mb-2" placeholder="About (you can copy the upper field here if you want to keep same)"><?php echo $value[0]->about_magpieos; ?></textarea>

                        <label for="copyright" class="text-primary mt-3">Current year (for copyright section)</label>
                        <input id="copyright" name="copyright" type="number" placeholder="Copyright (current year)" class="form-control my-2" value="<?php echo $value[0]->copyright_year; ?>">
                        <div class="form-group my-5">
                            <label for="logo" class="text-info">Select Logo</label> <br>
                            <input name="logo" id="logo" type="file" class="">
                        </div>    
                        <div class="form-group my-5">
                            <label for="logo" class="text-info">Select background image for <span class="text-danger">mobile</span></label> <br>
                            <input name="bg_image_for_mobile" id="logo" type="file" class="">
                        </div>   
                        <div class="form-group my-5">
                            <label for="logo" class="text-info">Select background image for <span class="text-danger">desktop</span> (large image)</label> <br>
                            <input name="bg_image_for_desktop" id="logo" type="file" class="">
                        </div> 
                        <input type="submit" value="Submit" class="w-25 btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>