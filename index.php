<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get in Touch</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles_bootstrap.css" />
</head>
<body>

<div class="container">
    <div>
        <h1 class="text-center mb-1 title">Get in touch</h1>
        <p class="text-center mb-5 subtitle">Reach out, and let's create a universe of possibilities together!</p>
    </div>
    <div class="row main">
        <div class="col-md-6">
            <div class="form-info-text">
                <h2>Let's connect constellations</h2>
                <p>Let's align our constellations! Reach out and let the magic of collaboration illuminate our skies.</p>
            </div>
            <div class="form-container">
                <form action="assets/scripts/form-handler/form_handler.php" method="POST" target="_blank">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="lastName"></label>
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="firstName"></label>
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email"></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber"></label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <label for="message"></label>
                        <textarea class="form-control" id="message" rows="3" name="message" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom btn-block">Send it to the moon 🚀</button>
                </form>
            </div>
        </div>
        <div class="col-md-6 image-container">
            <img src="assets/storage/images/cosmo.png" alt="Astronaut">
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
