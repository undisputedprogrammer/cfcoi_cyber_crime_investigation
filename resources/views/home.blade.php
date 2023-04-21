<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cyber Crime Investigation</title>
  @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/config.css','resources/css/w3.css'])
  <link rel="stylesheet" href="asset('build/assets/app-925432e4.css')">
  <link rel="stylesheet" href="asset('build/assets/config.css')">
  <link rel="stylesheet" href="asset('build/assets/w3.css')">


</head>

<body x-data="{ open: false, toggle() { this.open = ! this.open }}">
  <header>
    <nav class="flex items-center px-10  md:p-4 h-28">
        <div class="flex items-center text-white mr-6 lg:h-20">
          <img src="{{asset('images/hasal_Cyber_crime_logo_d49e9876-1ecd-4cc1-bed8-4ead1ddc060d.png')}}" class="h-12 w-12 lg:h-16 lg:w-16 lg:ml-10"  />
        </div>
        <div class="w-full flex justify-end">
          <div class="w-full flex font-cci">
            <div class=" w-[56%] lg:w-[43%] font-semibold mx-auto hidden md:block mr-8 text-stone-600 text-xl">
              <a
                href="/"
                class=" hover:text-red-900 mr-4 underline"
              >
                Home</a>
              <a
                href="/about"
                class=" hover:text-red-900 mr-4"
              >
                About</a>
              <a
                href="/training"
                class=" hover:text-red-900 mr-4 "
              >
                Training</a>
              <a
                href="/contact"
                class="hover:text-red-900 mr-4 "
              >
                Contact</a>
            </div>
          </div>
          <img @click="toggle()" src="{{asset('Icons/Menu.svg')}}" alt="" class="md:hidden h-10 w-10" />
        </div>
      </nav>
  </header>
  {{-- menu --}}
  <div x-show="open" x-cloak x-transition class="fixed top-0 bg-red h-full w-full z-20 flex flex-col">
    <div class="w-full text-center flex justify-end mt-14 pr-10">
      <svg @click="toggle()" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.0"
        stroke="currentColor" class="w-8 h-8 text-white">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </div>
    <div class="m-24 flex flex-col mb-5 ml-8">
      <div class="flex text-4xl pb-16 text-white font-garalama">
        <a href="" class="justify-center hover:text-amber-200 underline">HOME</a>
      </div>
      <div class="flex text-4xl pb-16 text-white font-garalama">
        <a href="" class="justify-center hover:text-amber-200">ABOUT</a>
      </div>
      <div class="flex text-4xl pb-16 text-white font-garalama">
        <a href="" class="justify-center hover:text-amber-200">TRAINING</a>
      </div>
      <div class="flex text-4xl pb-16 text-white font-garalama">
        <a href="" class="justify-center hover:text-amber-200">CONTACT</a>
      </div>
    </div>
  </div>
  {{-- end menu --}}


  {{-- hero --}}
  <div class="flex relative h-[450px] sm:h-[662px] md:h-[430px] lg:h-[630px]  sm:flex sm:flex-col xsm:h-[576px] md:flex-row">
    <img src="/images/Images/Hero Images/job-moses-x-yy3_fAavM-unsplash.jpg" alt=""
      class="h-[180px] xsm:h-[324px] sm:h-[390px] w-full object-left-top mix-blend-overlay z-0 md:hidden" />
    <div class=" bg-grey z-10 absolute w-full pl-4 top-25 pb-16 pt-10 sm:relative xsm:pt-2 xsm:px-8 md:px-7 md:pt-40 lg:pt-72 lg:pl-16">
      <h1 class="text-red-700 font-garalama text-2xl xsm:text-4xl xsm:pt-4 md:hidden">
        PRIVATE<br />INVESTIGATION<br />AGENCY
      </h1>
      <h1 class="text-red-700 font-garalama xsm:pt-4 hidden md:block md:text-2xl lg:text-4xl text-white">
        PRIVATE INVESTIGATION AGENCY
      </h1>
      <p class="  text-white font-cci font-ultrathin pt-2 pb-6 xsm:text-xl xsm:pt-4 xsm:pb-8 md:pb-10">
        Cyber crime Investigation & Forensic
      </p>
      <a href="" class="bg-red text-white font-garalama font-ultrathin px-6 py-4">Learn More</a>
    </div>
    <img src="/images/Images/Hero Images/towfiqu-barbhuiya-em5w9_xj3uU-unsplash-1.jpg" alt="" class="hidden md:block w-[60%] md:w-[80%] lg:w-[85%] h-\[450px\]]">
  </div>
  {{-- end hero --}}

  {{-- are you facing these issues --}}
  <div class="w-full bg-red pl-4 pt-14 pb-12 xsm:pl-14 md:p-20 md:flex md:pb-0">
   <div class="md:w-2/3"><h1 class="text-white pb-10 text-2xl font-medium md:hidden">
      ARE YOU FACING<br />
      ANY OF THESE<br />
      CYBER<br />
      CHALLENGES?
    </h1>
    <h1 class="text-white pb-10 text-4xl font-medium hidden md:block md:text-3xl md:font-ultrathin">
      ARE YOU FACING ANY OF THESE CYBER<br>CHALLENGES?
    </h1>
  </div>
 <div class="md:flex md:justify-end md:w-1/3">
    <div>
    <a href="" class=" font-garalama bg-white text-blue-900 p-4 md:justify-end text-xl ">LEARN MORE</a>
  </div>
  </div>
  </div>
{{-- end of are you facing these issues --}}

{{-- carousel --}}
  <div class="relative pb-16 md:hidden" x-data="{ left:false, slide: 0, toggleleft() {this.left=true}, toggleright() {this.left=false} }">
    <div class="pl-4 xsm:pl-9 slide" x-show="slide === 0" :class="left ? 'w3-animate-left' : 'w3-animate-right'">
      <div>
        <img src="/images/Images/Hero Images/keepcoding-lVF2HLzjopw-unsplash.jpg" alt="" class="p-8 pl-0 xsm:pl-0" />
      </div>
      <div class="p-8 pt-0 pl-6">
        <h3 class="pb-4 text-stone-600">
          BUSINESS EMAIL<br />
          COMPROMISE
        </h3>
        <p class="font-cci text-stone-600">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, ex
          unde dolorum repellat quia consectetur ducimus debitis. Ducimus ex
          consectetur magnam, officiis earum dicta vero maxime officia
          deleniti modi enim.
        </p>
      </div>
    </div>
    <div class="pl-4 xsm:pl-9 slide" x-show="slide === 1" :class="left ? 'w3-animate-left' : 'w3-animate-right'">
      <div>
        <img src="/images/Images/Hero Images/joe-shields-dLij9K4ObYY-unsplash.jpg" alt="" class="p-8 pl-0 xsm:pl-0" />
      </div>
      <div class="p-8 pt-0 pl-6">
        <h3 class="pb-4 text-stone-600">
          BUSINESS EMAIL<br />
          COMPROMISE
        </h3>
        <p class="font-cci text-stone-600">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, ex
          unde dolorum repellat quia consectetur ducimus debitis. Ducimus ex
          consectetur magnam, officiis earum dicta vero maxime officia
          deleniti modi enim.
        </p>
      </div>
    </div>
    <div class="pl-4 xsm:pl-9 slide" x-show="slide === 2" :class="left ? 'w3-animate-left' : 'w3-animate-right'">
      <div>
        <img src="{{asset('images/Images/Hero Images/towfiqu-barbhuiya-em5w9_xj3uU-unsplash-cropped.jpg')}}" alt=""
          class="p-8 pl-0 xsm:pl-0" />
      </div>
      <div class="p-8 pt-0 pl-6">
        <h3 class="pb-4 text-stone-600">
          BUSINESS EMAIL<br />
          COMPROMISE
        </h3>
        <p class="font-cci text-stone-600">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, ex
          unde dolorum repellat quia consectetur ducimus debitis. Ducimus ex
          consectetur magnam, officiis earum dicta vero maxime officia
          deleniti modi enim.
        </p>
      </div>
    </div>
    <div class="pl-4 xsm:pl-9 slide" x-show="slide === 3" :class="left ? 'w3-animate-left' : 'w3-animate-right'">
        <div>
          <img src="{{asset('images/Images/Section Images/rupixen-com-Q59HmzK38eQ-unsplash.jpg')}}" alt="" class="p-8 pl-0 xsm:pl-0" />
        </div>
        <div class="p-8 pt-0 pl-6">
          <h3 class="pb-4 text-stone-600">
            BITCOIN
          </h3>
          <p class="font-cci text-stone-600">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, ex
            unde dolorum repellat quia consectetur ducimus debitis. Ducimus ex
            consectetur magnam, officiis earum dicta vero maxime officia
            deleniti modi enim.
          </p>
        </div>
      </div>
    <div class="absolute bottom-0 flex justify-center w-full p-8">
        <div x-on:click="slide = Math.max(slide - 1, 0)" @click="toggleleft()" class="p-3 bg-red rounded-full mr-4">
        <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-white w-6 h-6  rounded-full">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
     </div>
     <div x-on:click="slide = Math.min(slide + 1, 3)" @click="toggleright()" class=" bg-red p-3 rounded-full">
      <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
    </div>

    </div>
  </div>

  {{-- end carousel --}}
  <div class="bg-red h-16 w-full absolute hidden md:block"></div>



  <!-- md -->


<div x-data="{ scroll: 0 }" class="slider hidden md:block pb-4">
<div class="slider-container flex m-0" :style="'transform: translateX(-' + scroll + 'px)'">
  <template x-for="i in 1" class="w-16">
    <div class=" pt-0 h">
      <div class="w-[400px]">
        <img src="/images/Images/Section Images/rupixen-com-Q59HmzK38eQ-unsplash.jpg" alt=""
          class="p-8 w-[400px] h-[290px] pt-4" />
      </div>
      <h3 class="pb-4 text-stone-600 pl-14 text-xl">
        BUSINESS EMAIL<br />
        COMPROMISE
      </h3>
      <p class="font-cci text-stone-600 text-xs pl-14">
        Lorem, ipsum dolor sit amet<br>consectetur adipisicing elit.<br> Fuga, ex
        unde dolorum<br> repellat quia consectetur<br> ducimus debitis.<br>Ducimus ex
        consectetur magnam,<br>officiis earum dicta vero maxime<br> officia
        deleniti modi enim.
      </p>
    </div>
  </template>
  <template x-for="i in 1" class="w-16">
    <div class=" pt-0 h">
      <div class="w-[400px]">
        <img src="/images/Images/Random Images/sergey-zolkin-_UeY8aTI6d0-unsplash.jpg" alt=""
          class="p-8 w-[400px] h-[290px] pt-4" />
      </div>
      <h3 class="pb-4 text-stone-600 pl-14 text-xl">
        EMAIL RELATED CRIMES
      </h3>
      <p class="font-cci text-stone-600 text-xs pl-14">
        Lorem, ipsum dolor sit amet<br>consectetur adipisicing elit.<br> Fuga, ex
        unde dolorum<br> repellat quia consectetur<br> ducimus debitis.<br>Ducimus ex
        consectetur magnam,<br>officiis earum dicta vero maxime<br> officia
        deleniti modi enim.
      </p>
    </div>
  </template>
  <template x-for="i in 1" class="w-16">
    <div class=" pt-0 h">
      <div class="w-[400px]">
        <img src="/images/Images/Hero Images/keepcoding-lVF2HLzjopw-unsplash.jpg" alt=""
          class="p-8 w-[400px] h-[290px] pt-4" />
      </div>
      <h3 class="pb-4 text-stone-600 pl-14 text-xl">
        ONLINE TRANSACTION<br>FRAUDS
      </h3>
      <p class="font-cci text-stone-600 text-xs pl-14">
        Lorem, ipsum dolor sit amet<br>consectetur adipisicing elit.<br> Fuga, ex
        unde dolorum<br> repellat quia consectetur<br> ducimus debitis.<br>Ducimus ex
        consectetur magnam,<br>officiis earum dicta vero maxime<br> officia
        deleniti modi enim.
      </p>
    </div>
  </template>
  <template x-for="i in 1" class="w-16">
    <div class=" pt-0 h">
      <div class="w-[400px]">
        <img src="/images/Images/Section Images/rupixen-com-Q59HmzK38eQ-unsplash.jpg" alt=""
          class="p-8 w-[400px] h-[290px] pt-4" />
      </div>
      <h3 class="pb-4 text-stone-600 pl-14 text-xl">
        BITCOIN
      </h3>
      <p class="font-cci text-stone-600 text-xs pl-14">
        Lorem, ipsum dolor sit amet<br>consectetur adipisicing elit.<br> Fuga, ex
        unde dolorum<br> repellat quia consectetur<br> ducimus debitis.<br>Ducimus ex
        consectetur magnam,<br>officiis earum dicta vero maxime<br> officia
        deleniti modi enim.
      </p>
    </div>
  </template>
</div>
</div>
  <div class="w-full pl-4 pt-6 pb-12 xsm:pl-14 md:flex md:flex-col md:justify-center md:pt-16 md:pb-16 md:pl-0">
    <h1 class="font-garalama text-gray-800 text-2xl font-medium pb-6 md:hidden">
      WE'RE HERE TO<br />
      HELP YOU.
    </h1>
    <div class="hidden md:block md:flex md:justify-center">
    <h1 class="font-garalama text-stone-600 text-3xl font-medium pb-6">
      WE'RE HERE TO HELP YOU.
    </h1></div>
    <div class="md:flex md:justify-center"><a href="" class="text-xs font-garalama text-white bg-red p-3 pl-6 pr-6 text-base">CONTACT US</a></div>
  </div>
  <div class="bg-blue w-full pl-4 pt-6 pb-8 xsm:pl-14 pt-16 md:pl-0 md:pb-0 md:flex md:pt-0">
    <div class="md:pl-16 md:pb-8 md:w-3/6 md:pt-24">
   <div> <h1 class="font-garalama text-white text-2xl font-medium pb-6">
      WHY US ?
    </h1></div>
    <div>
    <div class="flex">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
      </svg>
      <p class="text-white font-cci font-ultrathin pb-6 xsm:text-xl pl-5 xsm:pb-8">
        Reason Number 1
      </p>
    </div>
    <div class="flex">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
      </svg>
      <p class="text-white font-cci font-ultrathin pb-6 xsm:text-xl pl-5 xsm:pb-8">
        Reason Number 1
      </p>
    </div>
    <div class="flex">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
      </svg>
      <p class="text-white font-cci font-ultrathin pb-6 xsm:text-xl pl-5 xsm:pb-8">
        Reason Number 1
      </p>
    </div>
    <div class="flex">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
      </svg>
      <p class="text-white font-cci font-ultrathin pb-6 xsm:text-xl pl-5 xsm:pb-8">
        Reason Number 1
      </p>
    </div>
    <div class="flex">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
      </svg>
      <p class="text-white font-cci font-ultrathin pb-6 xsm:text-xl pl-5 xsm:pb-8">
        Reason Number 1
      </p>
    </div>
    <div class="flex">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
      </svg>
      <p class="text-white font-cci font-ultrathin pb-6 xsm:text-xl pl-5 xsm:pb-8">
        Reason Number 1
      </p>
    </div>
  </div>
  </div>
  <div class="hidden md:block md:pb-0 md:pl-0 md:w-3/6 ">
    <img src="/images/Images/Hero Images/imad92-asad-eIlUFVmK1Fs-unsplash.jpg" alt="" class="h-full w-full">
  </div>
  </div>
  <div class="md:hidden">
    <img src="/images/Images/Hero Images/imad92-asad-eIlUFVmK1Fs-unsplash.jpg" alt="">
  </div>
  <div class="w-full pl-4 pt-16 pb-12 xsm:pl-14 md:flex md:justify-between">
   <div><h1 class="font-garalama txt-blue text-2xl font-medium pb-6 md:text-3xl">
      OUR PROCESS
    </h1></div> <div class="pr-36">
    <a href="" class="text-xs font-garalama text-white bg-blue p-4 font-ultrathin pl-6 pr-6">START NOW</a></div>
  </div>
  <div class="relative pb-16 md:hidden" x-data="{ left:false, slide: 0, toggleleft() {this.left=true}, toggleright() {this.left=false} }">
    <div class="pl-4 xsm:pl-14 slide" x-show="slide === 0" :class="left ? 'w3-animate-left' : 'w3-animate-right'">
      <div>

      </div>
      <div class="p-8 pt-0 pl-6">
        <h3 class="pb-4 text-stone-600">
          BUSINESS EMAIL<br />
          COMPROMISE
        </h3>
        <p class="font-cci text-stone-600">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, ex
          unde dolorum repellat quia consectetur ducimus debitis. Ducimus ex
          consectetur magnam, officiis earum dicta vero maxime officia
          deleniti modi enim.
        </p>
      </div>
    </div>
    <div class="pl-4 xsm:pl-14 slide" x-show="slide === 1" :class="left ? 'w3-animate-left' : 'w3-animate-right'">
      <div>

      </div>
      <div class="p-8 pt-0 pl-6">
        <h3 class="pb-4 text-stone-600">
          BUSINESS EMAIL<br />
          COMPROMISE
        </h3>
        <p class="font-cci text-stone-600">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, ex
          unde dolorum repellat quia consectetur ducimus debitis. Ducimus ex
          consectetur magnam, officiis earum dicta vero maxime officia
          deleniti modi enim.
        </p>
      </div>
    </div>
    <div class="pl-4 xsm:pl-14 slide" x-show="slide === 2" :class="left ? 'w3-animate-left' : 'w3-animate-right'">
      <div>

      </div>
      <div class="p-8 pt-0 pl-6">
        <h3 class="pb-4 text-stone-600">
          BUSINESS EMAIL<br />
          COMPROMISE
        </h3>
        <p class="font-cci text-stone-600">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, ex
          unde dolorum repellat quia consectetur ducimus debitis. Ducimus ex
          consectetur magnam, officiis earum dicta vero maxime officia
          deleniti modi enim.
        </p>
      </div>
    </div>
    <div class="absolute bottom-0 flex justify-center w-full p-8">
        <div x-on:click="slide = Math.max(slide - 1, 0)" @click="toggleleft()" class="p-3 rounded-full bg-blue mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
              </svg>

    </div>
    <div x-on:click="slide = Math.min(slide + 1, 2)" @click="toggleright()" class="p-3 rounded-full bg-blue">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
          </svg>

    </div>
    </div>
  </div>

  <!-- md -->


  <div x-data="{ scroll: 0 }" class="slider hidden md:block pb-4 mb-4">
    <div class="slider-container flex m-0" :style="'transform: translateX(-' + scroll + 'px)'">
      <template x-for="i in 1" class="w-16 ">
        <div class=" pt-0 border-2 m-8 border-blue-600 h-fit w-fit pb-3">
          <div class=" flex justify-end pr-2 pb-4">
            <h2 class="txt-blue">01/06</h2>
          </div>
          <h3 class="pb-4 txt-blue pl-3 text-xl">
           PROCESS 1
          </h3>
          <p class="font-cci txt-blue text-xs pl-3 pr-2">
            Lorem, ipsum dolor sit amet<br>consectetur adipisicing elit.<br> Fuga, ex
            unde dolorum<br> repellat quia consectetur<br> ducimus debitis.<br>Ducimus ex
            consectetur,<br>officiis earum dicta<br> officia
            deleniti modi enim.
          </p>
        </div>
      </template>
      <template x-for="i in 1" class="w-16 ">
        <div class=" pt-0 border-2 m-8 border-blue-600 h-fit w-fit pb-3">
          <div class=" flex justify-end pr-2 pb-4">
            <h2 class="txt-blue">02/06</h2>
          </div>
          <h3 class="pb-4 txt-blue pl-3 text-xl">
           PROCESS 2
          </h3>
          <p class="font-cci txt-blue text-xs pl-3 pr-2">
            Lorem, ipsum dolor sit amet<br>consectetur adipisicing elit.<br> Fuga, ex
            unde dolorum<br> repellat quia consectetur<br> ducimus debitis.<br>Ducimus ex
            consectetur,<br>officiis earum dicta<br> officia
            deleniti modi enim.
          </p>
        </div>
      </template>
      <template x-for="i in 1" class="w-16 ">
        <div class=" pt-0 border-2 m-8 border-blue-600 h-fit w-fit pb-3">
          <div class=" flex justify-end pr-2 pb-4">
            <h2 class="txt-blue">03/06</h2>
          </div>
          <h3 class="pb-4 txt-blue pl-3 text-xl">
           PROCESS 3
          </h3>
          <p class="font-cci txt-blue text-xs pl-3 pr-2">
            Lorem, ipsum dolor sit amet<br>consectetur adipisicing elit.<br> Fuga, ex
            unde dolorum<br> repellat quia consectetur<br> ducimus debitis.<br>Ducimus ex
            consectetur,<br>officiis earum dicta<br> officia
            deleniti modi enim.
          </p>
        </div>
      </template>
      <template x-for="i in 1" class="w-16 ">
        <div class=" pt-0 border-2 m-8 border-blue-600 h-fit w-fit pb-3">
          <div class=" flex justify-end pr-2 pb-4">
            <h2 class="txt-blue">04/06</h2>
          </div>
          <h3 class="pb-4 txt-blue pl-3 text-xl">
           PROCESS 4
          </h3>
          <p class="font-cci txt-blue text-xs pl-3 pr-2">
            Lorem, ipsum dolor sit amet<br>consectetur adipisicing elit.<br> Fuga, ex
            unde dolorum<br> repellat quia consectetur<br> ducimus debitis.<br>Ducimus ex
            consectetur,<br>officiis earum dicta<br> officia
            deleniti modi enim.
          </p>
        </div>
      </template>
      <template x-for="i in 1" class="w-16 ">
        <div class=" pt-0 border-2 m-8 border-blue-600 h-fit w-fit pb-3">
          <div class=" flex justify-end pr-2 pb-4">
            <h2 class="txt-blue">05/06</h2>
          </div>
          <h3 class="pb-4 txt-blue pl-3 text-xl">
           PROCESS 5
          </h3>
          <p class="font-cci txt-blue text-xs pl-3 pr-2">
            Lorem, ipsum dolor sit amet<br>consectetur adipisicing elit.<br> Fuga, ex
            unde dolorum<br> repellat quia consectetur<br> ducimus debitis.<br>Ducimus ex
            consectetur,<br>officiis earum dicta<br> officia
            deleniti modi enim.
          </p>
        </div>
      </template>
      <template x-for="i in 1" class="w-16 ">
        <div class=" pt-0 border-2 m-8 border-blue-600 h-fit w-fit pb-3">
          <div class=" flex justify-end pr-2 pb-4">
            <h2 class="txt-blue">06/06</h2>
          </div>
          <h3 class="pb-4 txt-blue pl-3 text-xl">
           PROCESS 6
          </h3>
          <p class="font-cci txt-blue text-xs pl-3 pr-2">
            Lorem, ipsum dolor sit amet<br>consectetur adipisicing elit.<br> Fuga, ex
            unde dolorum<br> repellat quia consectetur<br> ducimus debitis.<br>Ducimus ex
            consectetur,<br>officiis earum dicta<br> officia
            deleniti modi enim.
          </p>
        </div>
      </template>
    </div>
    </div>
  <div class="bg-stone-600 p-8 md:pb-16">
    <div class=" text-white pt-3">
      <div><img src="/images/hasal_Cyber_crime_logo_d49e9876-1ecd-4cc1-bed8-4ead1ddc060d.png" class="h-10 w-10 md:h-14 md:w-14" />
      </div>
      <div class="md:flex md:justify-evenly">
        <div class="md:mr-52 md:pt-10">
        <h3 class=" text-2xl font-garalama pb-6 text-white pt-10 md:pb-6">
          ABOUT
        </h3>

        <h3 class="text-2xl font-garalama pb-6 text-white md:pb-6">
          TRAINING
        </h3>

        <h3 class=" text-2xl font-garalama pb-6 text-white md:pb-6">
          ITEM
        </h3>

        <h3 class=" text-2xl font-garalama pb-6 text-white md:pb-6">
          CONTACT
        </h3>
      </div>
      <div class=" md:ml-16 md:mr-12">
        <h3 class="pb-4 text-white pt-20 md:mr-9 md:ml-64 md:pl-16">ADDRESS</h3>
        <p class="text-white font-cci pb-4 md:mr-9 md:ml-28 md:pl-16">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente omnis odit consequuntur accusamus esse
          corrupti! Provident similique vel voluptatem numquam autem soluta officiis. Consequuntur, modi. Quidem
          repudiandae quo cum eos?</p>
          <div class="flex justify-evenly  md:ml-40">
            <img src="/Icons/facebook.svg" alt="">
            <img src="/Icons/linkedin.svg" alt="">
            <img src="/Icons/youtube.svg" alt="">
            <img src="/Icons/whatsapp.svg" alt="">
          </div>
      </div></div></div>
      <div></div>

      <div class="pt-28 md:pt-48 flex justify-center">
        <p class="text-white font-cci font-ultrathin">copyright 2023. All rights reserved</p>
      </div></div>

    </div></div>

</body>

</html>
