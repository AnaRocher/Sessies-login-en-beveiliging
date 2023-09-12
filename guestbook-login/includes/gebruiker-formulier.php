<div>
    <label for="username" class="text-gray-500 font-semibold">Wat is je username?</label>
    <div>
        <input value="<?php echo $_POST['username'] ?? '' ?>" placeholder="..." id="username" type="text"
            name="username" class="block bg-gray-200 p-2 w-full border border-neutral-400">
    </div>
    <?php if (isset($foutmeldingen['username'])): ?>
    <span class="text-red-500 text-sm"><?php echo $foutmeldingen['username'] ?></span>
    <?php endif ?>
</div>

<div>
    <label for="password" class="text-gray-500 font-semibold">Wat is je wachtwoord?</label>
    <div>
        <input value="<?php echo $_POST['password'] ?? '' ?>" placeholder="..." id="password" type="password"
            name="password" class="block bg-gray-200 p-2 w-full border border-neutral-400">
    </div>
    <?php if (isset($foutmeldingen['password'])): ?>
    <span class="text-red-500 text-sm"><?php echo $foutmeldingen['password'] ?></span>
    <?php endif ?>
</div>