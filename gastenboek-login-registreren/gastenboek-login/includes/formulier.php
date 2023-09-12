<div>
    <label for="hotel" class="text-gray-500 font-semibold">Waar verbleef je?</label>
    <div>
        <select name="hotel_id" id="hotel" class="block w-full p-2 border border-neutral-400">
            <?php foreach($hotels as $hotel): ?>
                <option <?php if (isset($_POST['hotel_id']) && $_POST['hotel_id'] == $hotel['id']) { echo 'selected'; } ?> value="<?php echo $hotel['id'] ?>"><?php echo $hotel['naam'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
</div>
<div>
    <label for="beschrijving" class="text-gray-500 font-semibold">Wat was je ervaring?</label>
    <div>
        <textarea placeholder="..." name="beschrijving" id="beschrijving" class="block bg-gray-200 p-2 w-full border border-neutral-400"><?php echo $_POST['beschrijving'] ?? '' ?></textarea>
    </div>
    <?php if (isset($foutmeldingen['beschrijving'])): ?>
        <span class="text-red-500 text-sm"><?php echo $foutmeldingen['beschrijving'] ?></span>
    <?php endif ?>
</div>
<div>
    <label for="score" class="text-gray-500 font-semibold">Welke score geef je?</label>
    <div>
        <select name="score" id="score" class="block w-full p-2 border border-neutral-400">
            <option <?php if (isset($_POST['score']) && $_POST['score'] == 1) { echo 'selected'; } ?> value="1">★</option>
            <option <?php if (isset($_POST['score']) && $_POST['score'] == 2) { echo 'selected'; } ?> value="2">★★</option>
            <option <?php if (isset($_POST['score']) && $_POST['score'] == 3) { echo 'selected'; } ?> value="3">★★★</option>
            <option <?php if (isset($_POST['score']) && $_POST['score'] == 4) { echo 'selected'; } ?> value="4">★★★★</option>
            <option <?php if (isset($_POST['score']) && $_POST['score'] == 5) { echo 'selected'; } ?> value="5">★★★★★</option>
        </select>
    </div>
</div>