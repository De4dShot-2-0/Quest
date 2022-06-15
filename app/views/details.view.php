<?php require('partials/header.php'); ?>

    <h1 class="text-center mt-4">Details of the "<?=$conference->title?>" conference</h1>
    <button class="mt-1 ml-5 mb-4 btn btn-primary"><a href="/" class="text-white text-decoration-none">Go Back</a></button>
    <div class="container">
        <table class="table table-bordered table-border-dark w-50 m-auto">
            <tr>
                <td style="border-color: black;"><h4>Title:</h4></td>
                <td style="border-color: black;"><h4><?= $conference->title; ?></h4></td>
            </tr>
            <tr>
                <td style="border-color: black;"><h4>Date:</h4></td>
                <td style="border-color: black;"><h4><?= date("d M Y H:i:s", strtotime($conference->date)); ?></h4></td>
            </tr>
            <tr>
                <td style="border-color: black;"><h4>Country:</h4></td>
                <td style="border-color: black;"><h4><?= $conference->country; ?></h4></td>
            </tr>
    
        </table>

        <input type="numeric" id="lat" class="d-none" value=<?=$conference->address_x; ?>>
        <input type="numeric" id="lng" class="d-none" value=<?=$conference->address_y; ?>>
        
        <div class="w-50 mx-auto mt-4">
            <div id="map" style="border: 1px solid black; height:300px;">
            
            </div>
        </div>

        <div class="mt-3">
        <table class="w-50 m-auto">
            <tr class="text-center">
                <td><button class="btn btn-info"><a href="/edit?id=<?=$conference->id; ?>" class="text-white text-decoration-none">Edit</a></button></td>
                <td>
                    <form method="POST" action="/delete?id=<?= $conference->id; ?>">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        </table>
        </div>
    </div>

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-KdWJqXblMLZTGYdsLZJeOkjjJiFUbvY&callback=loadMap&libraries=&v=weekly"
    defer
></script>
<script type="text/javascript" src="/public/js/googlemap.js"></script>
<?php require('partials/footer.php'); ?>