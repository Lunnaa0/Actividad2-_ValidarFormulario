<!DOCTYPE html>
<html>
<head>
    <title>Register Form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="flex-page">
        <h1>Customer Registration</h1>
        <form class="form-font capaform" name="registerform" action="validaformulario.php" method="POST">
            <div class="flex-outer">
                <div class="form-section">
                    <label for="name">Name:</label>
                    <input id="name" type="text" name="name" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>" placeholder="Enter your name:" />
                    <?php if (isset($errors['name'])): ?>
                        <span class="error"><?php echo $errors['name']; ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-section">
                    <label for="password">Contraseña:</label>
                    <input id="password" type="password" name="password" placeholder="Enter your password:" />
                    <?php if (isset($errors['password'])): ?>
                        <span class="error"><?php echo $errors['password']; ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-section">
                    <label for="email">Email:</label>
                    <input id="email" type="text" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" placeholder="Enter your email">
                    <?php if (isset($errors['email'])): ?>
                        <span class="error"><?php echo $errors['email']; ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-section">
                    <label for="dateofbirth">Date of Birth:</label>
                    <input id="dateofbirth" type="date" name="dateofbirth" value="<?php echo isset($dateofbirth) ? htmlspecialchars($dateofbirth) : ''; ?>" placeholder="Enter your date of birth">
                    <?php if (isset($errors['dateofbirth'])): ?>
                        <span class="error"><?php echo $errors['dateofbirth']; ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-section">
                    <label for="telephone">Teléfono Móvil:</label>
                    <input id="telephone" type="tel" name="tel" value="<?php echo isset($telephone) ? htmlspecialchars($telephone) : ''; ?>" placeholder="Enter your telephone">
                    <?php if (isset($errors['telephone'])): ?>
                        <span class="error"><?php echo $errors['telephone']; ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-section">
                    <label for="shop">Closest Shop:</label>
                    <select id="shop" name="shop">
                        <option value="Madrid" <?php echo (isset($shop) && $shop == "Madrid") ? 'selected' : ''; ?>>Madrid</option>
                        <option value="Barcelona" <?php echo (isset($shop) && $shop == "Barcelona") ? 'selected' : ''; ?>>Barcelona</option>
                        <option value="Valencia" <?php echo (isset($shop) && $shop == "Valencia") ? 'selected' : ''; ?>>Valencia</option>
                    </select>
                    <?php if (isset($errors['shop'])): ?>
                        <span class="error"><?php echo $errors['shop']; ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-section">
                    <label>Age:</label>
                    <div class="select-section">
                        <div>
                            <input id="-25" type="radio" name="age" value="-25" <?php echo (isset($age) && $age == "-25") ? 'checked' : ''; ?> />
                            <label for="-25">Younger than 25</label>
                        </div>
                        <div>
                            <input id="25-50" type="radio" name="age" value="25-50" <?php echo (isset($age) && $age == "25-50") ? 'checked' : ''; ?> />
                            <label for="25-50">Between 25 and 50</label>
                        </div>
                        <div>
                            <input id="50-" type="radio" name="age" value="50-" <?php echo (isset($age) && $age == "50-") ? 'checked' : ''; ?> />
                            <label for="50-">Older than 50</label>
                        </div>
                    </div>
                    <?php if (isset($errors['age'])): ?>
                        <span class="error"><?php echo $errors['age']; ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-section">
                    <label for="subscription">Newsletter subscription:</label>
                    <input id="subscription" type="checkbox" name="subscription" <?php echo isset($_POST['subscription']) ? 'checked' : ''; ?> />
                </div>

                <div class="form-section">
                    <div class="submit-section">
                        <input class="submit" type="submit" value="Send" name="sendbutton" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</body


