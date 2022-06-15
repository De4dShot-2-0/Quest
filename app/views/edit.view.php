<?php require('partials/header.php'); ?>

<div class="container">
    <div class="d-inline text-center">
        <h2 class="mt-4">Editing the "<?=$conference->title; ?>" conference</h2>
        <button class="btn btn-primary mb-3"><a href="/details?show=<?=$conference->id; ?>" class="text-white text-decoration-none">Go Back</a></button>
    </div>
    <form method="POST" action="/update">
        <input type="numeric" name="id" class="d-none" value="<?=$conference->id; ?>">
        <table class="mx-auto border border-dark">
            <tr>
                <td class="pt-3"><h5><label class="pt-4 ml-4" for="title">Title</label></h5></td>
                <td class="pt-4"><input class="ml-5 w-75" type="text" name="title" value="<?=$conference->title; ?>" required></td>
            </tr>
            
            <tr>
                <td class="pt-3">
                    <h5><label class="ml-4" for="date">Date</label></h5>
                </td>
                <td>
                    <input class="ml-5" type="datetime-local" name="date" value="<?= date('Y-m-d\TH:i', strtotime($conference->date)); ?>" min="<?= date('Y-m-d\TH:i');?>" required>
                </td>
            </tr>

            <tr>
                <td class="pt-3">
                    <h5><label class="ml-4" for="country">Choose country</label></h5>
                </td>
                <td>
                    <select class="ml-5" name="country" id="country" required>
                        <option value="Ukraine" <?php if($conference->country == "Ukraine") echo 'selected'; ?> >Ukraine</option>
                        <option value="USA" <?php if($conference->country == "USA") echo 'selected'; ?> >USA</option>
                        <option value="Canada" <?php if($conference->country == "Canada") echo 'selected'; ?> >Canada</option>
                        <option value="France" <?php if($conference->country == "France") echo 'selected'; ?> >France</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td class="pt-3">
                    <h5><label class="ml-4">Enter coordinates</label></h5>
                </td>
                <td>
                    <input class="ml-5" type="text" id="lat" name="address_x" placeholder="Latitude" onkeypress="validate(event)" value="<?=$conference->address_x; ?>" required>
                    <input class="mr-4" type="text" id="lng" name="address_y" placeholder="Longitude" onkeypress="validate(event)" value="<?=$conference->address_y; ?>" required>
                </td>
            </tr>

            <tr>
                <td><button class="btn btn-primary ml-4 mb-3" type="submit">Save</button></td>
    </form>
    
                <td>
                    <form method="POST" action="/delete?id=<?= $conference->id; ?>">
                        <button type="submit" class="btn btn-danger mr-5 mb-3 float-right">Delete</button>
                    </form>
                </td>
            </tr>
            
        </table>

        <div class="w-50 mx-auto mt-2">
            <div id="map" style="border: 1px solid black; height:300px;">
            
            </div>
        </div>
    
</div>

<script type="text/javascript" src="/public/js/latLngValidate.js"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-KdWJqXblMLZTGYdsLZJeOkjjJiFUbvY&callback=loadMap&libraries=&v=weekly"
    defer
></script>
<script type="text/javascript" src="/public/js/googlemap_edit.js"></script>

<?php require('partials/footer.php'); ?>