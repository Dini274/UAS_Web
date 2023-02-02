<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('/assets/images/maemmamam.svg') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Maem Mamam</title>
    <style>
        @tailwind base;
        @tailwind components;
        @tailwind utilities;
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600&display=swap');
        
        *{
            margin: 0;
            padding: 0;
        }
    </style>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                bg: '#100E0B',
                text : '#FF9900'
              },
              fontFamily : {
                content : ['Poppins','sans-serif'],
                button : ['Inter', 'sans-serif']
              }
            }
          }
        }
      </script>
</head>
<body class="overflow-x-hidden bg-bg scroll-smooth">
    @include('template.navbar')  

    @yield('container')

    
    @include('template.footer')  
</body>
</html>