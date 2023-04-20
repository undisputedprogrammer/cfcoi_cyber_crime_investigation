<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cyber Crime Investigation</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/config.css', 'resources/css/w3.css'])
</head>

<body x-data="{ open: false, toggle() { this.open = !this.open } }">
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
                    class=" hover:text-red-900 mr-4  text-center underline-offset-8"
                  >
                    Home</a>
                  <a
                    href="/about"
                    class=" hover:text-red-900 mr-4 underline"
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
    <div x-show="open" x-cloak x-transition class="fixed top-0 bg-red h-full w-full z-20 flex flex-col">
        <div class="w-full text-center flex justify-end mt-14 pr-10">
            <svg @click="toggle()" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="3.0" stroke="currentColor" class="w-8 h-8 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
        <div class="m-24 flex flex-col mb-5 ml-8">
            <div class="flex text-4xl pb-16 text-white font-garalama">
                <a href="/" class="justify-center hover:text-amber-200">HOME</a>
            </div>
            <div class="flex text-4xl pb-16 text-white font-garalama">
                <a href="#" class="justify-center hover:text-amber-200 underline">ABOUT</a>
            </div>
            <div class="flex text-4xl pb-16 text-white font-garalama">
                <a href="/training" class="justify-center hover:text-amber-200">TRAINING</a>
            </div>
            <div class="flex text-4xl pb-16 text-white font-garalama">
                <a href="/contact" class="justify-center hover:text-amber-200">CONTACT</a>
            </div>
        </div>
    </div>
    <div class="flex flex-col relative h-[450px] sm:h-[662px] sm:flex sm:flex-col xsm:h-[576px] md:h-[430px] lg:h-[580px] xl:h-[662px]  md:flex-row ">
        <img src="/images/Images/Hero Images/keepcoding-lVF2HLzjopw-unsplash.jpg" alt=""
            class="h-[200px] xsm:h-[324px] sm:h-[390px] w-full object-left-top mix-blend-overlay z-10 md:hidden" />
        <div
            class="  bg-grey z-10  w-full pl-4 bottom-0 pb-8 pt-10 sm:relative xsm:pt-2 xsm:pl-14 md:pl-14 md:pt-40 lg:pt-56 xl:pt-72">
            <p class="txt-yellow font-cci text-lg">About</p>
            <h1 class="text-red-700 font-garalama text-2xl xsm:text-4xl xsm:pt-4 md:hidden">
                PRIVATE<br />INVESTIGATION<br />AGENCY
            </h1>
            <h1 class="text-red-700 font-garalama xsm:pt-4 hidden md:block md:text-xl txt-red lg:text-3xl   xl:text-[2.3rem]">
                PAUSE AND THINK BEFORE YOU<br>CONNECT
            </h1>
            <p class="text-white font-cci font-ultrathin pt-2 pb-6 xsm:text-lg xsm:pt-4 xsm:pb-8 md:pb-10 lg:text-[1.3rem] xl:text-[1.5rem]">
                Be online but Be safe
            </p>
        </div>
        <img src="/images/Images/Hero Images/keepcoding-lVF2HLzjopw-unsplash.jpg" alt=""
            class="hidden md:block w-[75%] md:w-[85%] lg:w-[85%] ">
    </div>
    <div class="px-8 pt-16 pb-16 md:pb-0 md:px-24 flex-col space-y-5">
        <h1 class="font-garalama text-3xl">Cybersecurity, everywhere you need it</h1>
        <p class="font-cci text-xl lg:text-2xl text-stone-600">Internet is evitable, but it opens up a portal for cyber crminals to steal, harm, and destroy our properties and make us miserable. We are here for your protection. Our vision is a world where each day is safer and more secure than the one before, eliminating cyber criminals and cyber crimes makes us one step further to our mission, but we need your support and trust to do so. </p>
            <p class=" lg:text-2xl font-cci text-xl  text-stone-600">Now you might be thinking why you should choose us, when it comes to delivering unparalleled security to your internet transformation, you don't need to look anywhere else. We provide security to your business/enterprise as well as to your property and privacy.<br></p>
                <p class=" lg:text-2xl font-cci text-xl  text-stone-600">Don't worry if you're not using our security services, it's not too late. If you have run into any security threat or you're experiencing cyber issues, rush to us, we will solve all of your problem so that you can utilise the web effectively, efficiently and safely.
                    <br></p>


    </div>

    <h1 class=" w-[80%] px-24 my-20 font-garalama text-3xl">Your Saftey, Our Promise</h1>


    <div class="w-full  pl-4 pt-16 pb-12 md:pb-0 md:pt-4 xsm:pl-14 md:flex md:justify-between 2xl:w-[84%] 2xl:mx-auto">
        <div>
            <h1 class="font-garalama txt-red text-4xl font-medium pb-6 md:text-3xl">
                OUR ACHIEVEMENTS
            </h1>
        </div>
    </div>
    <div class="xl:flex pb-10 2xl:w-[84%] 2xl:mx-auto">
        <div class="md:pl-4 w-[364px] h-[243px] md:w-[80%] md:h-[150px]  mx-auto bg-slate-100 drop-shadow-lg md:mb-8 mb-4 xl:h-[243px] xl:w-[364px]">


                <h3 class="pb-4 md:pb-2 txt-blue pl-3 text-xl font-garalama">
                    SOLVED INR 17LK LOAN SCAM
                </h3>
                <p class="font-cci txt-blue text-md pl-3 pr-2 pb-4">
                    Worked with Kerala police department to solve a loan scan of 17 lakh indian rupees. Traced the whereabouts of mastermind by tracking his credit card
                    transaction. Received medal of appreciation from Commissioner
                    Nagaraju IPS
                </p>

        </div>
        <div class="md:pl-4 w-[364px] h-[243px] md:w-[80%] md:h-[150px] mx-auto bg-slate-100 drop-shadow-lg md:mb-8 mb-4 xl:h-[243px] xl:w-[364px]">


            <h3 class="pb-4 txt-blue pl-3 text-xl font-garalama">
                APPRECIATED BY MANGALORE POLICE DEPARTMENT
            </h3>
            <p class="font-cci txt-blue text-md pl-3 pr-2 pb-4">
                Served as Investigation Team lead for Mangalore Police Department. Solved several cases. <br>Traced a criminal from Instagram posts. Received stellar
                appreciation from Commissioner Shashi Kumar IPS.
            </p>

    </div>
    <div class="md:pl-4 w-[364px] h-[213px] md:w-[80%] md:h-[150px] mx-auto bg-slate-100 drop-shadow-lg md:mb-8 xl:h-[243px] xl:w-[364px]">


        <h3 class="pb-4 txt-blue pl-3 text-xl font-garalama">
            POLICE DEPARTMENT SUPPORT
        </h3>
        <p class="font-cci txt-blue text-md pl-3 pr-2 pb-4">
            forensic investigation consultant with
            3.5 years track record in solving cybercrime cases
            with Kerala and Mangalore Police Department. Strong in ethical
            hacking, team leadership, cybercrime consulting. <br>
        </p>

</div>
    </div>
    <div class="bg-stone-600 p-8 md:pb-16">
        <div class=" text-white pt-3">
            <div><img src="/images/hasal_Cyber_crime_logo_d49e9876-1ecd-4cc1-bed8-4ead1ddc060d.png"
                    class="h-10 w-10 md:h-14 md:w-14" />
            </div>
            <div class="md:flex md:justify-evenly">
                <div class="md:mr-52 md:pt-10">
                    <h3 class=" text-2xl font-garalama pb-4 text-white pt-10 md:pb-8">
                        ABOUT
                    </h3>

                    <h3 class=" text-2xl font-garalama pb-4 text-white md:pb-8">
                        TRAINING
                    </h3>

                    <h3 class=" text-2xl font-garalama pb-4 text-white md:pb-8">
                        ITEM
                    </h3>

                    <h3 class=" text-2xl font-garalama pb-4 text-white md:pb-8">
                        CONTACT
                    </h3>
                </div>
                <div class=" md:ml-16 md:mr-12">
                    <h3 class="pb-3 text-white pt-20 md:mr-9 text-center">ADDRESS</h3>
                    <p class="text-white font-cci pb-4 md:mr-7 md:ml-30 md:pl-20">Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Sapiente omnis odit consequuntur accusamus esse
                        corrupti! Provident similique vel voluptatem numquam autem soluta officiis. Consequuntur, modi.
                        Quidem
                        repudiandae quo cum eos?</p>
                    <div class="flex justify-evenly m-auto">
                        <img src="/Icons/facebook.svg" alt="">
                        <img src="/Icons/linkedin.svg" alt="">
                        <img src="/Icons/youtube.svg" alt="">
                        <img src="/Icons/whatsapp.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div></div>

        <div class="pt-28 md:pt-48 flex justify-center">
            <p class="text-white font-cci font-ultrathin">copyright 2023. All rights reserved</p>
        </div>
    </div>
</body>

</html>
