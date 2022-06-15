<?php require('partials/header.php'); ?>
<div class="container">
    <div class="d-inline text-center">
        <h1 class="mt-3">Сreation of a Сonference</h1>
        <button class="mb-3 btn btn-primary"><a href="/" class="text-white text-decoration-none">Go Back</a></button>
    </div>
    
    
    <form method="POST" action="/store">
        <table class="mx-auto border border-dark">
            <tr>
                <td><h4><label class="pt-4 ml-4" for="title">Title:</label></h4></td>
                <td class="pt-2"><input class="ml-5 w-75" type="text" name="title" required></td>
            </tr>
            
            <tr>
                <td class="pt-3">
                    <h4><label class="ml-4" for="date">Date:</label></h4>
                </td>
                <td>
                    <input class="ml-5" type="datetime-local" min="<?= date('Y-m-d\TH:i');?>" name="date" required>
                </td>
            </tr>

            <tr>
                <td class="pt-3">
                    <h4><label class="ml-4" for="country">Choose country:</label></h4>
                </td>
                <td>
                    <select class="ml-5" name="country" id="country" required>
                        <option value="" selected disabled>Change Country</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="USA">USA</option>
                        <option value="Canada">Canada</option>
                        <option value="France">France</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td class="pt-3">
                    <h4><label class="ml-4">Enter coordinates:</label></h4>
                </td>
                <td>
                    <input class="ml-5" id="lat" type="numeric" name="address_x" value="49.0139" onkeypress="validate(event)" placeholder="Latitude" required>
                    <input class="mr-4" id="lng" type="numeric" name="address_y" value="31.2858" onkeypress="validate(event)" placeholder="Longitude" required>
                </td>
            </tr>
            <tr>
                <td><button class="btn btn-primary mt-1 ml-4 mb-2" type="submit">Save</button></td>
            </tr>
        </table>
        
        <div class="w-50 mx-auto mt-2">
            <div id="map" style="border: 1px solid black; height:300px;">
            
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="/public/js/latLngValidate.js"></script>

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-KdWJqXblMLZTGYdsLZJeOkjjJiFUbvY&callback=loadMap&libraries=&v=weekly"
    defer
></script>
<script type="text/javascript" src="/public/js/googlemap_create.js"></script>

<?php require('partials/footer.php'); ?>