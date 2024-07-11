<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Form</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>

<body>
    <div class="container mt-5">
        <h2>General Form</h2>
        <form action="process_data.php" method="POST">
            <!-- Text input -->
            <div class="mb-3">
                <label for="textInput" class="form-label">Text Input</label>
                <input type="text" class="form-control" id="textInput" name="textInput" value="<?php echo isset($_GET['textInput']) ? htmlspecialchars($_GET['textInput']) : ''; ?>">
                <?php if (isset($_GET['error']) && isset($_GET['textInput'])) : ?>
                    <div class="text-danger"><?php echo $_GET['textInput']; ?></div>
                <?php endif; ?>
            </div>

            <!-- Email input -->
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="emailInput" name="emailInput" value="<?php echo isset($_GET['emailInput']) ? htmlspecialchars($_GET['emailInput']) : ''; ?>">
                <?php if (isset($_GET['error']) && isset($_GET['emailInput'])) : ?>
                    <div class="text-danger"><?php echo $_GET['emailInput']; ?></div>
                <?php endif; ?>
            </div>

            <!-- Password input -->
            <div class="mb-3">
                <label for="passwordInput" class="form-label">Password</label>
                <input type="password" class="form-control" id="passwordInput" name="passwordInput">
                <?php if (isset($_GET['error']) && isset($_GET['passwordInput'])) : ?>
                    <div class="text-danger"><?php echo $_GET['passwordInput']; ?></div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="numberInput" class="form-label">Number Input</label>
                <input type="number" class="form-control" id="numberInput" name="numberInput" value="<?php echo isset($_GET['numberInput']) ? htmlspecialchars($_GET['numberInput']) : ''; ?>">
                <?php if (isset($_GET['error']) && isset($_GET['numberInput'])) : ?>
                    <div class="text-danger"><?php echo $_GET['numberInput']; ?></div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="dropdownInput" class="form-label">Dropdown Input</label>
                <select class="form-select" id="dropdownInput" name="dropdownInput">
                    <option selected disabled value="">Choose...</option>
                    <option value="bca" <?php echo (isset($_GET['dropdownInput']) && $_GET['dropdownInput'] === 'bca') ? 'selected' : ''; ?>>BCA</option>
                    <option value="mca" <?php echo (isset($_GET['dropdownInput']) && $_GET['dropdownInput'] === 'mca') ? 'selected' : ''; ?>>MCA</option>
                    <option value="ca" <?php echo (isset($_GET['dropdownInput']) && $_GET['dropdownInput'] === 'ca') ? 'selected' : ''; ?>>CA</option>
                </select>
                <?php if (isset($_GET['error']) && isset($_GET['dropdownInput'])) : ?>
                    <div class="text-danger"><?php echo $_GET['dropdownInput']; ?></div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label class="form-label">Radio Buttons</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="radioInput" id="radio1" value="male" <?php echo (isset($_GET['radioInput']) && $_GET['radioInput'] === 'option1') ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="radio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="radioInput" id="radio2" value="female" <?php echo (isset($_GET['radioInput']) && $_GET['radioInput'] === 'option2') ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="radio2">Female</label>
                </div>
                <?php if (isset($_GET['error']) && isset($_GET['radioInput'])) : ?>
                    <div class="text-danger"><?php echo $_GET['radioInput']; ?></div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="rangeInput" class="form-label">Range Input</label>
                <input type="range" class="form-range" id="rangeInput" name="rangeInput" min="0" max="100" value="<?php echo isset($_GET['rangeInput']) ? htmlspecialchars($_GET['rangeInput']) : ''; ?>">
                <?php if (isset($_GET['error']) && isset($_GET['rangeInput'])) : ?>
                    <div class="text-danger"><?php echo $_GET['rangeInput']; ?></div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="colorInput" class="form-label">Color Input</label>
                <input type="color" class="form-control form-control-color" id="colorInput" name="colorInput" value="<?php echo isset($_GET['colorInput']) ? htmlspecialchars($_GET['colorInput']) : ''; ?>">
                <?php if (isset($_GET['error']) && isset($_GET['colorInput'])) : ?>
                    <div class="text-danger"><?php echo $_GET['colorInput']; ?></div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="datetimeInput" class="form-label">Datetime Input</label>
                <input type="datetime-local" class="form-control" id="datetimeInput" name="datetimeInput" value="<?php echo isset($_GET['datetimeInput']) ? htmlspecialchars($_GET['datetimeInput']) : ''; ?>">
                <?php if (isset($_GET['error']) && isset($_GET['datetimeInput'])) : ?>
                    <div class="text-danger"><?php echo $_GET['datetimeInput']; ?></div>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="../assets/scripts.js"></script>
</body>

</html>