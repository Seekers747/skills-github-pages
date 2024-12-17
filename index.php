<?php
  // Basic data about the solar system
  $planets = [
      ['name' => 'Mercury', 'diameter' => '4,879 km', 'distance_from_sun' => '57.9 million km', 'moons' => '0'],
      ['name' => 'Venus', 'diameter' => '12,104 km', 'distance_from_sun' => '108.2 million km', 'moons' => '0'],
      ['name' => 'Earth', 'diameter' => '12,742 km', 'distance_from_sun' => '149.6 million km', 'moons' => '1'],
      ['name' => 'Mars', 'diameter' => '6,779 km', 'distance_from_sun' => '227.9 million km', 'moons' => '2'],
      ['name' => 'Jupiter', 'diameter' => '139,820 km', 'distance_from_sun' => '778.5 million km', 'moons' => '80'],
      ['name' => 'Saturn', 'diameter' => '116,460 km', 'distance_from_sun' => '1.4 billion km', 'moons' => '83'],
      ['name' => 'Uranus', 'diameter' => '50,724 km', 'distance_from_sun' => '2.9 billion km', 'moons' => '27'],
      ['name' => 'Neptune', 'diameter' => '49,244 km', 'distance_from_sun' => '4.5 billion km', 'moons' => '14']
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Solar System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 20px;
        }
        footer {
            margin-top: 30px;
            text-align: center;
            padding: 10px;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header class="text-center mb-5">
        <h1>Our Solar System</h1>
        <p>Explore the planets in our solar system</p>
    </header>

    <!-- Main Content Section -->
    <div class="container">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Planet</th>
                    <th scope="col">Diameter</th>
                    <th scope="col">Distance from Sun</th>
                    <th scope="col">Moons</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($planets as $planet): ?>
                    <tr>
                        <td><?php echo $planet['name']; ?></td>
                        <td><?php echo $planet['diameter']; ?></td>
                        <td><?php echo $planet['distance_from_sun']; ?></td>
                        <td><?php echo $planet['moons']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Imraan's Solar System Project</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>