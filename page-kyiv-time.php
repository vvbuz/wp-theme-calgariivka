<?php get_header(); ?>

<h1>Порівняння часу Калгарі та Києва</h1>
<?php
date_default_timezone_set('America/Edmonton'); // Set Calgary time zone
$calgaryTime = date('Y-m-d H:i:s'); // Get Calgary time

date_default_timezone_set('Europe/Kiev'); // Set Kyiv time zone
$kyivTime = date('Y-m-d H:i:s'); // Get Kyiv time
?>
<div class="time">
    <div class="row">
        <div class="col-12 col-md-6">
            <p>Калгарі, Канада: <span id="calgary-time"><?php echo $calgaryTime; ?></span></p>
        </div>
        <div class="col-12 col-md-6">
            <p>Київ, Україна: <span id="kyiv-time"><?php echo $kyivTime; ?></span></p>
        </div>
    </div>
</div>


<script>
    function updateCalgaryTime() {
        const calgaryTimeElement = document.getElementById('calgary-time');
        const options = {
            timeZone: 'America/Edmonton',
            hour12: false,
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric',
            locale: 'uk-UA' // Set Ukrainian locale
        };

        const calgaryTime = new Date().toLocaleString('en-US', options);
        calgaryTimeElement.textContent = `${calgaryTime}`;
    }

    function updateKyivTime() {
        const kyivTimeElement = document.getElementById('kyiv-time');
        const options = {
            timeZone: 'Europe/Kiev',
            hour12: false,
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric',
            locale: 'uk-UA' // Set Ukrainian locale
        };

        const kyivTime = new Date().toLocaleString('en-US', options);
        kyivTimeElement.textContent = `${kyivTime}`;
    }

    // Update the time initially and every second
    updateCalgaryTime();
    updateKyivTime();
    setInterval(updateCalgaryTime, 1000);
    setInterval(updateKyivTime, 1000);
</script>

<?php get_footer(); ?>