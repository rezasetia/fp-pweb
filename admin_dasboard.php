<?php

session_start();

if (empty($_SESSION['role'])) {
    header("Location: ./loginuser.php");
} else {
    if ($_SESSION['role'] != 'admin') {
        header("Location: ./loginuser.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link href="output.css" rel="stylesheet">
</head>

<body>
    <!-- session -->
    <?php

    if (isset($_SESSION['success_message'])) {
        echo '<div class="success-message">' . $_SESSION['success_message'] . '</div>';
        unset($_SESSION['success_message']);
    }
    ?>
    <!-- tableuser -->
    <div class="container mx-auto p-4">

        <h2 class="text-2xl font-bold mb-4">Table User </h2>
        <table class="w-full border">
            <thead>
                <tr>
                    <th class="border p-2">ID</th>
                    <th class="border p-2">Username</th>
                    <th class="border p-2">Password</th>
                    <th class="border p-2">Status</th>
                    <th class="border p-2">Role</th>
                    <th class="border p-2">Akses</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $query = "SELECT * FROM user";
                $result = mysqli_query($link, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td class='border p-2'>" . $row['id'] . "</td>";
                        echo "<td class='border p-2'>" . $row['username'] . "</td>";
                        echo "<td class='border p-2'>" . $row['password'] . "</td>";
                        echo "<td class='border p-2'>" . $row['status'] . "</td>";
                        echo "<td class='border p-2'>" . $row['role'] . "</td>";
                        echo "<td class='border p-2'>" . $row['akses'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td class='border p-2' colspan='5'>Tidak ada data user.</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <h2 class="text-2xl font-bold mb-4">
            <span style="color: red;">Delete Data User</span>
        </h2>
        <form action="deleteuser.php" method="post">
            <label for="id">ID:</label>
            <input type="text" name="id" id="id">
            <button type="submit">Delete</button>
        </form>
        <!-- table kucing -->
        <h2 class="mt-10 text-2xl font-bold mb-4">Table Kucing</h2>
        <table class="w-full border">
            <thead>
                <tr>
                    <th class="border p-2">ID</th>
                    <th class="border p-2">Jenis</th>
                    <th class="border p-2">Gambar</th>
                    <th class="border p-2">Harga</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $query1 = "SELECT * FROM kucing";
                $result1 = mysqli_query($link, $query1);

                if (mysqli_num_rows($result1) > 0) {
                    while ($row = mysqli_fetch_assoc($result1)) {
                        echo "<tr>";
                        echo "<td class='border p-2'>" . $row['Id'] . "</td>";
                        echo "<td class='border p-2'>" . $row['jenis'] . "</td>";
                        echo "<td class='border p-2'><img src='img/" . $row['gambar'] . "' width='100'></td>";
                        echo "<td class='border p-2'>" . $row['harga'] . "</td>";

                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td class='border p-2' colspan='3'>Tidak ada data kucing.</td></tr>";
                }
                ?>
            </tbody>
        </table>


        <!-- Form Insert -->
        <div class="">
            <h2 class="text-2xl font-bold mb-4">
                <span style="color: red;">Insert Data Kucing</span>
            </h2>

            <form action="insertkucing.php" method="post">
                <label for="jenis">Jenis:</label>
                <input type="text" name="jenis" id="jenis">
                <label for="gambar">Gambar:</label>
                <input type="text" name="gambar" id="gambar">
                <label for="harga">Harga:</label>
                <input type="text" name="harga" id="harga">
                <button type="submit">Insert</button>
            </form>
            <!-- form delete -->
            <h2 class="text-2xl font-bold mb-4">
                <span style="color: red;">Delete Data kucing</span>
            </h2>
            <form action="deletekucing.php" method="post">
                <label for="id">ID:</label>
                <input type="text" name="Id" id="Id">
                <button type="submit">Delete</button>
            </form>

            <!-- form edit -->
            <h2 class="text-2xl font-bold mb-4">
                <span style="color: red;">Update Data kucing</span>
            </h2>
            <form action="updatekucing.php" method="post">
                <label for="Id">ID:</label>
                <input type="text" name="Id" id="Id">
                <label for="jenis">Jenis:</label>
                <input type="text" name="jenis" id="jenis">
                <label for="gambar">Gambar:</label>
                <input type="text" name="gambar" id="gambar">
                <label for="harga">Harga:</label>
                <input type="text" name="harga" id="harga">
                <button type="submit">Update</button>
            </form>
            <!-- table anjing -->
            <h2 class="mt-10 text-2xl font-bold mb-4">Table Anjing</h2>
            <table class="w-full border">
                <thead>
                    <tr>
                        <th class="border p-2">ID</th>
                        <th class="border p-2">Jenis</th>
                        <th class="border p-2">Gambar</th>
                        <th class="border p-2">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query2 = "SELECT * FROM anjing";
                    $result2 = mysqli_query($link, $query2);

                    if (mysqli_num_rows($result2) > 0) {
                        while ($row = mysqli_fetch_assoc($result2)) {
                            echo "<tr>";
                            echo "<td class='border p-2'>" . $row['Id'] . "</td>";
                            echo "<td class='border p-2'>" . $row['jenis'] . "</td>";
                            echo "<td class='border p-2'><img src='img/" . $row['gambar'] . "' width='100'></td>";
                            echo "<td class='border p-2'>" . $row['harga'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td class='border p-2' colspan='3'>Tidak ada data anjing.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
            <!-- Form Insert -->
            <div class="">
                <h2 class="text-2xl font-bold mb-4">
                    <span style="color: red;">Insert Data Anjing</span>
                </h2>
                <form action="insertanjing.php" method="post">
                    <label for="jenis">Jenis:</label>
                    <input type="text" name="jenis" Id="jenis">
                    <label for="gambar">Gambar:</label>
                    <input type="text" name="gambar" Id="gambar">
                    <label for="harga">Harga:</label>
                    <input type="text" name="harga" Id="harga">
                    <button type="submit">Insert</button>
                </form>

                <!-- form delete -->
                <h2 class="text-2xl font-bold mb-4">
                    <span style="color: red;">Delete Data Anjing</span>
                </h2>
                <form action="deleteanjing.php" method="post">
                    <label for="id">ID:</label>
                    <input type="text" name="Id" id="Id">
                    <button type="submit">Delete</button>
                </form>
                <!-- updete data  -->
                <h2 class="text-2xl font-bold mb-4">
                    <span style="color: red;">Update Data Anjing</span>
                </h2>
                <form action="updateanjing.php" method="post">
                    <label for="Id">ID:</label>
                    <input type="text" name="Id" Id="Id">
                    <label for="jenis">Jenis:</label>
                    <input type="text" name="jenis" Id="jenis">
                    <label for="gambar">Gambar:</label>
                    <input type="text" name="gambar" Id="gambar">
                    <label for="harga">Harga:</label>
                    <input type="text" name="harga" Id="harga">
                    <button type="submit">Update</button>
                </form>
                <!-- table makanankucing -->
                <h2 class="mt-10 text-2xl font-bold mb-4">Table Makanan Kucing</h2>
                <table class="w-full border">
                    <thead>
                        <tr>
                            <th class="border p-2">iD</th>
                            <th class="border p-2">Merk</th>
                            <th class="border p-2">Gambar</th>
                            <th class="border p-2">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query3 = "SELECT * FROM makanankucing";
                        $result3 = mysqli_query($link, $query3);

                        if (mysqli_num_rows($result3) > 0) {
                            while ($row = mysqli_fetch_assoc($result3)) {
                                echo "<tr>";
                                echo "<td class='border p-2'>" . $row['Id'] . "</td>";
                                echo "<td class='border p-2'>" . $row['merk'] . "</td>";
                                echo "<td class='border p-2'><img src='img/" . $row['gambar'] . "' width='100'></td>";
                                echo "<td class='border p-2'>" . $row['harga'] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td class='border p-2' colspan='3'>Tidak ada data makanan kucing.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <h2 class="text-2xl font-bold mb-4">
                    <span style="color: red;">Insert Makanan Kucing</span>
                </h2>
                <form action="insertmakanankucing.php" method="post">
                    <label for="jenis">Jenis:</label>
                    <input type="text" name="jenis" id="jenis">
                    <label for="gambar">Gambar:</label>
                    <input type="text" name="gambar" id="gambar">
                    <label for="harga">Harga:</label>
                    <input type="text" name="harga" id="harga">
                    <button type="submit">Insert</button>
                </form>
                <!-- form delete -->
                <h2 class="text-2xl font-bold mb-4">
                    <span style="color: red;">Delete Makanan Kucing</span>
                </h2>
                <form action="deletemakanankucing.php" method="post">
                    <label for="id">ID:</label>
                    <input type="text" name="Id" id="Id">
                    <button type="submit">Delete</button>
                </form>
                <!-- updete data  -->
                <h2 class="text-2xl font-bold mb-4">
                    <span style="color: red;">Update Makanan Kucing</span>
                </h2>
                <form action="updatemakanankucing.php" method="post">
                    <label for="Id">ID:</label>
                    <input type="text" name="Id" id="Id">
                    <label for="jenis">Jenis:</label>
                    <input type="text" name="jenis" id="jenis">
                    <label for="gambar">Gambar:</label>
                    <input type="text" name="gambar" id="gambar">
                    <label for="harga">Harga:</label>
                    <input type="text" name="harga" id="harga">
                    <button type="submit">Update</button>
                </form>

                <!-- table makanan anjing -->
                <h2 class="mt-10 text-2xl font-bold mb-4">Table Makanan Anjing</h2>
                <table class="w-full border">
                    <thead>
                        <tr>
                            <th class="border p-2">ID</th>
                            <th class="border p-2">Merk</th>
                            <th class="border p-2">Gambar</th>
                            <th class="border p-2">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query4 = "SELECT * FROM makanananjing";
                        $result4 = mysqli_query($link, $query4);

                        if (mysqli_num_rows($result4) > 0) {
                            while ($row = mysqli_fetch_assoc($result4)) {
                                echo "<tr>";
                                echo "<td class='border p-2'>" . $row['Id'] . "</td>";
                                echo "<td class='border p-2'>" . $row['merk'] . "</td>";
                                echo "<td class='border p-2'><img src='img/" . $row['gambar'] . "' width='100'></td>";
                                echo "<td class='border p-2'>" . $row['harga'] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td class='border p-2' colspan='3'>Tidak ada data makanan anjing.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <h2 class="text-2xl font-bold mb-4">
                    <span style="color: red;">Insert Makanan Anjing</span>
                </h2>
                <form action="insertmakanananjing.php" method="post">
                    <label for="jenis">Jenis:</label>
                    <input type="text" name="jenis" id="jenis">
                    <label for="gambar">Gambar:</label>
                    <input type="text" name="gambar" id="gambar">
                    <label for="harga">Harga:</label>
                    <input type="text" name="harga" id="harga">
                    <button type="submit">Insert</button>
                </form>
                <!-- form delete -->
                <h2 class="text-2xl font-bold mb-4">
                    <span style="color: red;">Delete Makanan Anjing</span>
                </h2>
                <form action="deletemakanananjing.php" method="post">
                    <label for="Id">ID:</label>
                    <input type="text" name="Id" id="Id">
                    <button type="submit">Delete</button>
                </form>
                <!-- updete data  -->
                <h2 class="text-2xl font-bold mb-4">
                    <span style="color: red;">Update Data Makanan Anjing</span>
                </h2>
                <form action="updatemakanananjing.php" method="post">
                    <label for="Id">ID:</label>
                    <input type="text" name="Id" id="Id">
                    <label for="jenis">Jenis:</label>
                    <input type="text" name="jenis" id="jenis">
                    <label for="gambar">Gambar:</label>
                    <input type="text" name="gambar" id="gambar">
                    <label for="harga">Harga:</label>
                    <input type="text" name="harga" id="harga">
                    <button type="submit">Update</button>
                </form>

                <div class="flex items-center  mt-10">
                    <a href="logout.php" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition-colors">
                        LOG OUT
                    </a>
                </div>
</body>

</html>

<!-- table makanan anjing -->