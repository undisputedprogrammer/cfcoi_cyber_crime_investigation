<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cyber Crime Investigation</title>
  @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/config.css','resources/css/w3.css'])
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
        <a href="#" class="justify-center hover:text-amber-200 underline">HOME</a>
      </div>
      <div class="flex text-4xl pb-16 text-white font-garalama">
        <a href="/about" class="justify-center hover:text-amber-200">ABOUT</a>
      </div>
      <div class="flex text-4xl pb-16 text-white font-garalama">
        <a href="/training" class="justify-center hover:text-amber-200">TRAINING</a>
      </div>
      <div class="flex text-4xl pb-16 text-white font-garalama">
        <a href="/contact" class="justify-center hover:text-amber-200">CONTACT</a>
      </div>
    </div>
  </div>
  {{-- end menu --}}


  {{-- hero --}}
  <div class="flex relative h-[450px] sm:h-[662px] md:h-[430px] lg:h-[630px]  sm:flex sm:flex-col xsm:h-[576px] md:flex-row">
    <img src="/images/Images/Hero Images/job-moses-x-yy3_fAavM-unsplash.jpg" alt=""
      class="h-[180px] xsm:h-[324px] sm:h-[390px] w-full object-left-top mix-blend-overlay z-0 md:hidden" />
    <div class=" bg-grey z-10 absolute w-full pl-4 bottom-0 pb-16 pt-10 sm:relative  xsm:pt-2 xsm:px-8 md:px-7 md:pt-40 lg:pt-72 lg:pl-16">
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
   <div class="md:w-2/3"><h1 class="text-white pb-10 text-2xl font-medium md:hidden font-garalama">
      ARE YOU FACING<br />
      ANY OF THESE<br />
      CYBER<br />
      CHALLENGES?
    </h1>
    <h1 class=" font-garalama text-white pb-10 text-4xl font-medium hidden md:block md:text-3xl md:font-ultrathin">
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
  {{-- <div class="relative pb-16 md:hidden" x-data="{ left:false, slide: 0, toggleleft() {this.left=true}, toggleright() {this.left=false} }">
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
  </div> --}}

  {{-- end carousel --}}
  <div class="bg-red h-16 w-full  hidden md:block"></div>



  <!-- md -->


<div  class=" lg:w-[80%] mx-auto  pb-4 ">
<div class=" flex m-0 flex-col md:flex-row md:flex-wrap" >

    <div class=" 2xl:w-[65%] md:basis-1/2 lg:basis-1/3 mt-4  p-3 mb-10 md:mb-0 w-[80%] m-auto border md:border-0 border-red-700">
        <div class="2xl:w-[85%]">
      <div class="w-[100%] ">
        <img src="/images/Images/Section Images/rupixen-com-Q59HmzK38eQ-unsplash.jpg" alt=""
          class=" w-[100%] h-[275px] lg:h-[210px] " />
      </div>
      <h3 class=" pb-4 text-stone-600  text-xl font-garalama">
        FRAUD MONEY COPORATES
      </h3>
      <p class="font-cci text-stone-600 text-md ">
        There are many forms of corporate fraud including falsified accounting and misrepresenting services or products. We have already delt with several online money frauds and helped retrieve the money back.
      </p>
    </div>
    </div>


    <div class=" 2xl:w-[65%] md:basis-1/2 lg:basis-1/3 mt-4 md:mt-0 p-3 mb-10 md:mb-0 w-[80%] m-auto border md:border-0  border-red-700">
        <div class="2xl:w-[85%]">
      <div class="w-[100%] ">
        <img src="/images/Images/Random Images/sergey-zolkin-_UeY8aTI6d0-unsplash.jpg" alt=""
          class=" w-[100%] h-[290px] pt-4 lg:h-[220px]" />
      </div>
      <h3 class="pb-4 font-garalama text-stone-600  text-xl">
        LOAN SCAMMED?
      </h3>
      <p class="font-cci text-stone-600 text-md">
        Loan scammers even use fake company logos, false caller ID numbers and other tricks to impersonate legitimate agencies and gain trust. We have helped kerala Police department to capture a 17 lack loan scammer.
      </p>
        </div>
    </div>


    <div class=" 2xl:w-[65%] md:basis-1/2 lg:basis-1/3 mt-4 md:mt-0 p-3 mb-10 md:mb-0 w-[80%] m-auto border md:border-0  border-red-700 ">
        <div class="2xl:w-[85%]">
      <div class="w-[100%] ">
        <img src="/images/Images/Hero Images/keepcoding-lVF2HLzjopw-unsplash.jpg" alt=""
          class=" w-[100%] h-[290px] pt-4 lg:h-[220px]" />
      </div>
      <h3 class="pb-4 text-stone-600 font-garalama text-xl">
        MALWARE ATTACKS
      </h3>
      <p class="font-cci text-stone-600 text-md ">
        A malware attack is a common cyberattack where malware (normally malicious software) executes unauthorized actions on the victim's system. Malwares can create a lot of problems and may lead to other cyber issues. If you are facing any such issues, hurry and contact us, your security and privacy is at risk.
      </p>
        </div>
    </div>


    <div class=" 2xl:w-[65%] md:basis-1/2 lg:basis-1/3 mt-4 md:mt-0 p-3 mb-10 md:mb-0 w-[80%] m-auto border md:border-0  border-red-700  ">
        <div class="2xl:w-[85%]">
      <div class="w-[100%] ">
        <img src="{{asset('images/Images/services/internet-scam.jpg')}}" alt=""
          class=" w-[100%] h-[290px] pt-4 lg:h-[220px]" />
      </div>
      <h3 class="pb-4 text-stone-600  text-xl font-garalama md:w-full">
        INTERNET SCAMS
      </h3>
      <p class="font-cci text-stone-600 text-md md:w-full">
        Internet scams can vary from Job offer scams, lottery scams, beneficiary scams, online dating scams, social media scams etc. If you are thinking your are being scammed, let's not waste any more time. It's time to take action.
      </p>
        </div>
    </div>

    <div class="2xl:w-[65%] md:basis-1/2 lg:basis-1/3 mt-4 md:mt-0 p-3 mb-10 md:mb-0 w-[80%] m-auto border md:border-0  border-red-700  ">
        <div class="2xl:w-[85%]">
        <div class="w-[100%] ">
          <img src="{{asset('images/Images/services/hacked.jpg')}}" alt=""
            class=" w-[100%] h-[290px] pt-4 lg:h-[220px]" />
        </div>
        <h3 class="pb-4 text-stone-600  text-xl font-garalama md:w-full">
          WEBSITES OR APPLICATIONS HACKED?
        </h3>
        <p class="font-cci text-stone-600 text-md md:w-full">
          If you own a website or application and you think someone has hacked it or some abnormal activies have been done, you and your buisiness is at risk. Hackers are hard to chase and they aren't going to leave you alone. If you need expert consulting, please contact us.
        </p>
        </div>
      </div>

      <div class=" 2xl:w-[65%] md:basis-1/2 lg:basis-1/3 mt-4 md:mt-0 p-3 mb-10 md:mb-0 w-[80%] m-auto border md:border-0  border-red-700  ">
        <div class="2xl:w-[85%]">
        <div class="w-[100%] ">
          <img src="{{asset('images/Images/services/ethical-hacking.jpg')}}" alt=""
            class=" w-[100%] h-[290px] pt-4 lg:h-[220px]" />
        </div>
        <h3 class="pb-4 text-stone-600  text-xl font-garalama md:w-full">
          ETHICAL HACKING
        </h3>
        <p class="font-cci text-stone-600 text-md md:w-full">
          If you want to secure your buisiness, privacy or money from intenet frauds, we can help you using ethical hacking. Carrying out an ethical hack involves duplicating strategies and actions of malicious attackers. This practice helps to identify security vulnerabilities which can then be resolved before a malicious attacker has the opportunity to exploit them.
        </p>
        </div>
      </div>

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
        <ul class="text-white font-cci text-lg md:text-xl">
            <li class=" flex mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 my-auto mr-3 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                  </svg>

                Nationwide 24/7 Availablity</li>

                <li class=" flex mb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 my-auto mr-3 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                      </svg>

                    Certified in Cyber Forensic</li>

                    <li class=" flex mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 my-auto mr-3 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                          </svg>

                        Experienced in cyber security</li>

                        <li class=" flex mb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 my-auto mr-3 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                              </svg>

                            Worked with law enforcement agencies</li>

                            <li class=" flex mb-8">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6  mr-3 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                                  </svg>

                                Good track record with Police Departments</li>

          </ul>
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


  <!-- md -->


  <div  class="   pb-4 mb-4">
    <div class=" flex m-0  flex-col md:flex-row flex-wrap md:w-[90%] lg:w-full xl:w-[90%] 2xl:w-[86%] mx-auto " >

        <div class=" md:basis-[45%] lg:basis-[22%] lg:mx-auto xl:basis-[21%] xl:mx-auto mx-auto pt-0 border-2 m-8 border-blue-600  w-[75%] pb-3">
          <div class=" flex justify-end pr-2 pb-4">
            <h2 class="txt-blue">01/08</h2>
          </div>
          <h3 class="pb-4 txt-blue pl-3 text-xl h-[60px] font-garalama">
           REPORTING
          </h3>
          <p class="font-cci txt-blue text-md pl-3 pr-2">
            Investigators need a request conduct from the victim/client to start an investigation procedure. Their first job is to learn as much about the case as possible.
          </p>
        </div>


        <div class=" w-[75%] md:basis-[45%]  lg:basis-[22%] lg:mx-auto xl:basis-[21%] xl:mx-auto mx-auto pt-0 border-2 m-8 border-blue-600   pb-3">
          <div class=" flex justify-end pr-2 pb-4">
            <h2 class="txt-blue">02/08</h2>
          </div>
          <h3 class="pb-4 txt-blue pl-3 text-xl h-[60px] font-garalama">
            INITIAL INVESTIGATION
          </h3>
          <p class="font-cci txt-blue text-md pl-3 pr-2">
            A preliminary information-gathering meeting should be conducted to determine the nature of the crime, the probable degree of technicality involved, and the names of potential suspects. Based on this initial information, investigators then plan their investigative approach.
          </p>
        </div>


        <div class=" md:basis-[45%] lg:basis-[22%] lg:mx-auto xl:basis-[21%] xl:mx-auto mx-auto pt-0 border-2 m-8 border-blue-600  w-[75%] pb-3">
          <div class=" flex justify-end pr-2 pb-4">
            <h2 class="txt-blue">03/08</h2>
          </div>
          <h3 class="pb-4 txt-blue pl-3 text-xl font-garalama">
            INVESTIGATION PLANNING
          </h3>
          <p class="font-cci txt-blue text-md pl-3 pr-2">

The plan should be a written document containing the names of the areas, persons, documents, files, and other factors to be investigated. The name of the investigator assigned, dates on which investigations started and ended, and brief comments on the case should also be included.

          </p>
        </div>


        <div class=" md:basis-[45%] lg:basis-[22%]  lg:mx-auto xl:basis-[21%] xl:mx-auto mx-auto pt-0 border-2 m-8 border-blue-600  w-[75%] pb-3">
          <div class=" flex justify-end pr-2 pb-4">
            <h2 class="txt-blue">04/08</h2>
          </div>
          <h3 class="pb-4 txt-blue pl-3 text-xl font-garalama">
            INFORMATION GATHERING
          </h3>
          <p class="font-cci txt-blue text-md pl-3 pr-2">
            Depending on the nature of the crime, information gathering may be simple or difficult. Information on suspects can be obtained from various outside sources such as the federal, state, and local law enforcement and government agencies, former employers, credit agencies, medical files, friends, and neighbours.
          </p>
        </div>


        <div class=" md:basis-[45%] lg:basis-[22%] lg:mx-auto xl:basis-[21%] xl:mx-auto mx-auto pt-0 border-2 m-8 border-blue-600  w-[75%] pb-3">
          <div class=" flex justify-end pr-2 pb-4">
            <h2 class="txt-blue">05/08</h2>
          </div>
          <h3 class="pb-4 txt-blue pl-3 text-xl font-garalama">
            INTERROGATION
          </h3>
          <p class="font-cci txt-blue text-md pl-3 pr-2">
            Interviewing and interrogation are particularly necessary, given the technical nature of the crime, interrogators should be expert in these areas and also should be fully aware of any legal liabilities which may arise. The main objective is to gather critical information from the suspect.

          </p>
        </div>


        <div class=" md:basis-[45%] lg:basis-[22%] lg:mx-auto xl:basis-[21%] xl:mx-auto mx-auto pt-0 border-2 m-8 border-blue-600  w-[75%] pb-3">
          <div class=" flex justify-end pr-2 pb-4">
            <h2 class="txt-blue">06/08</h2>
          </div>
          <h3 class="pb-4 txt-blue pl-3 text-xl font-garalama">
           TECHNICAL REVIEW
          </h3>
          <p class="font-cci txt-blue text-md pl-3 pr-2">
            Reviews of technical data systems will also be necessary as an aid in interrogation and general investigation. Because evidence removed from the crime scene (i.e., computer printouts, magnetic tapes) can be effective in tying the crime scene and the criminal together, forensic science plays a key role.
          </p>
        </div>

        <div class=" md:basis-[45%] lg:basis-[22%] lg:mx-auto xl:basis-[21%] xl:mx-auto mx-auto pt-0 border-2 m-8 border-blue-600  w-[75%] pb-3">
            <div class=" flex justify-end pr-2 pb-4">
              <h2 class="txt-blue">07/08</h2>
            </div>
            <h3 class="pb-4 txt-blue pl-3 text-xl font-garalama">
                FORENSIC
            </h3>
            <p class="font-cci txt-blue text-md pl-3 pr-2">
                Cyber forensics is the investigation of what happened and how. System forensics is performed on standalone machines. Network forensics involves the collection and analysis of network events in order to discover the sources of security attacks. The same process applied on Web is also known as Web forensics.
            </p>
          </div>

          <div class=" md:basis-[45%] lg:basis-[22%] lg:mx-auto xl:basis-[21%] xl:mx-auto mx-auto pt-0 border-2 m-8 border-blue-600  w-[75%] pb-3">
            <div class=" flex justify-end pr-2 pb-4">
              <h2 class="txt-blue">08/08</h2>
            </div>
            <h3 class="pb-4 txt-blue pl-3 text-xl font-garalama">
             CASE PRESENTATION
            </h3>
            <p class="font-cci txt-blue text-md pl-3 pr-2">
                Finally, since the success or failure of a criminal prosecution depends upon the evidence presented in court, the investigators--as the chief resource for knowledge of the case, working papers, incident reports, and exhibits--should have a thorough knowledge of the rules of evidence.
            </p>
          </div>

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
