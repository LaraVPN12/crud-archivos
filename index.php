<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD de Archivos-Kevin Lara</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="flex justify-center items-center">
    <div class="h-auto w-auto bg-slate-100 rounded-3xl shadow-xl mt-10">
      <!-- Header -->
      <div class="w-full h-auto flex justify-between p-5 border-b-2 border-gray-200">
        <button class="bg-green-400 py-2 px-3 rounded-xl" type="button" onclick="lib/crear.php">
          <div class="flex flex-row justify-center items-center">
            <i class="bi bi-plus" style="font-size: 20px; color: white;"></i>
            <a class="text-white font-semibold" href="lib/crear.php"><h1>CREAR ARCHIVO</h1></a>
          </div>
        </button>
        <button class="bg-red-400 h-8 w-8 rounded-full">
          <div class="flex flex-row justify-center items-center">
            <a class="text-white font-semibold" href="lib/eliminar.php"><h1>X</h1></a>
          </div>
        </button>
      </div>
      <!-- Body -->
      <form method="post" action="lib/editar.php">
        <div class="flex justify-center items-center p-5">
          <textarea 
          class="rounded-xl" rows="20" cols="100" 
          style="resize: none; outline: none;" name="content">
          </textarea>
        </div>
        <div class="w-full h-auto flex justify-end px-5 mb-5">
        <button class="bg-blue-400 py-2 px-3 rounded-xl mr-3">
          <div class="flex flex-row justify-center items-center">
            <input type="submit" name="button" value="ESCRIBIR" class="text-white font-semibold">
          </div>
        </button>
        <button class="bg-blue-400 py-2 px-3 rounded-xl">
          <div class="flex flex-row justify-center items-center">
            <input type="submit" name="button" value="SOBRE-ESCRIBIR" class="text-white font-semibold">
          </div>
        </button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>