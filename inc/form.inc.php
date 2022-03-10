<div class="container mt-5">
    <div class="row">
        <div class="col-lg-2 col-md-0 col-sm-0">
            <!-- empty column for spacing -->
        </div>
        <div class="col-lg-8 col-md-12 col-sm my-3">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <div>
                    <h2>Temperature Converter</h2>
                </div>
                <div class="group my-3">
                    <label for="temp" class="form-label">Original Temperature</label>
                    <input type="text" class="form-control" value="<?php if (isset($_POST['originaltemp'])) {
                                                                        echo $_POST['originaltemp'];
                                                                    }
                                                                    ?>" name="originaltemp" size="14" maxlength="7" id="temp">
                </div>
                <div class="group my-3">
                    <label for="originalunit" class="form-label">Please select the original unit</label>
                    <select name="originalunit" class="form-select">
                        <option value="--Select--">--Select--</option>
                        <option value="celsius" <?php if (isset($originalUnit) && $originalUnit == "celsius") echo " selected='selected'"; ?>>Celsius</option>
                        <option value="fahrenheit" <?= isset($originalUnit) && $originalUnit == "fahrenheit" ? " selected='selected'" : NULL; ?>>Fahrenheit</option>
                        <option value="kelvin" <?= isset($originalUnit) && $originalUnit == "kelvin" ? " selected='selected'" : NULL; ?>>Kelvin</option>
                    </select>
                </div>

                <div class="group my-3">
                    <label for="originalunit" class="form-label">Please select the converted unit</label>
                    <select name="conversionunit" class="form-select">
                        <option value="--Select--">--Select--</option>
                        <option value="celsius" <?= isset($conversionUnit) && $conversionUnit == "celsius" ? " selected='selected'" : NULL; ?>>Celsius</option>
                        <option value="fahrenheit" <?= isset($conversionUnit) && $conversionUnit == "fahrenheit" ? " selected='selected'" : NULL; ?>>Fahrenheit</option>
                        <option value="kelvin" <?= isset($conversionUnit) && $conversionUnit == "kelvin" ? " selected='selected'" : NULL; ?>>Kelvin</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-secondary my-3">Convert</button>
                <div class="group my-3">
                    <label for="convertedtemp" class="form-label">Converted Temperature</label>
                    <input type="text" class="form-control" value="<?php if (isset($convertedTemp)) {
                                                                        echo $convertedTemp;
                                                                    }
                                                                    ?>" name="convertedtemp" size="14" maxlength="7" id="convertedtemp" readonly>
                </div>
            </form>
        </div><!-- closing column -->
        <div class="col-lg-2 col-md-0 col-sm-0">
            <!-- empty column for spacing -->
        </div>
    </div><!-- closing row -->
</div><!-- closing container -->
<!-- End form -->