<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Portfolio - Home</title>

   <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-full h-screen overflow-hidden bg-[linear-gradient(to_top,rgba(0,0,0,0.959),rgb(70,1,49),rgb(19,18,18))] m-0 p-0 box-border select-none">

   @include('navigation')
    
   <div class="fixed mt-[180px] ml-[240px] w-[380px] h-[380px] rounded-full p-2 bg-gradient-to-tr from-[rgb(88,1,55)] via-[rgb(180,30,110)]/40 to-[rgb(88,1,55)] border-2 border-[rgb(88,1,55)] shadow-[0_0_50px_rgba(219,39,119,0.35)] flex items-center justify-center">
      <div class="w-full h-full rounded-full overflow-hidden bg-[#160312] border-2 border-[rgb(88,1,55)]">
         <img src="{{ asset('ID Photo.jpg') }}">
      </div>
   </div>

   <-- HOME CONTENT -->
<h1 class="fixed mt-[250px] ml-[870px] font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif] font-bold text-[44px] leading-tight">
   <span class="text-white">Hi, I'm </span>
   <span class="bg-gradient-to-r from-[#ff4d9e] via-[#f472b6] to-[#c084fc] bg-clip-text text-transparent">
      Yessha Blanco
   </span>
</h1>

<p class="fixed mt-[330px] ml-[870px] text-[#f9a8d4] font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif] font-semibold text-[26px]">
   A web developer and designer
</p>

<p class="fixed mt-[400px] ml-[870px] text-[rgb(201,167,167)] font-['Franklin_Gothic_Medium','Arial_Narrow',Arial,sans-serif] text-[20px] leading-normal">
   Developing web-based management systems, relational databases, <br>
   and clean modern interfaces. Blending full-stack programming with <br>
   technical drafting foundations.
</p>

</body>
</html>