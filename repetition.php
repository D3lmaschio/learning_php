<?php

$count = 1;

# With While
while ($count <= 15) {
    echo '#' . $count++ . PHP_EOL;
}

echo PHP_EOL;

# For loop
for ($i=1; $i <= 15; ++$i) {
    print '#' . $i . PHP_EOL;
}

echo PHP_EOL;

# Skipping an iteration
for ($i=1; $i <= 15; ++$i) {
    # Skiping the iteration 10:
    if ($i == 10) continue;
    echo '#' . $i . PHP_EOL;
}

echo PHP_EOL;

# Breaking/Stopping the iteration;
for ($i=1; $i <= 15; ++$i) {
    # Stopping at the 10th iteration:
    if ($i == 10) break;
    echo '#' . $i . PHP_EOL;
}