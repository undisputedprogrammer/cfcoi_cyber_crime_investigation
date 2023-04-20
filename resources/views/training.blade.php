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
                <img src="{{ asset('images/hasal_Cyber_crime_logo_d49e9876-1ecd-4cc1-bed8-4ead1ddc060d.png') }}"
                    class="h-12 w-12 lg:h-16 lg:w-16 lg:ml-10" />
            </div>
            <div class="w-full flex justify-end">
                <div class="w-full flex font-cci">
                    <div class=" w-[56%] lg:w-[43%] font-semibold mx-auto hidden md:block mr-8 text-stone-600 text-xl">
                        <a href="/" class=" hover:text-red-900 mr-4  text-center underline-offset-8">
                            Home</a>
                        <a href="/about" class=" hover:text-red-900 mr-4">
                            About</a>
                        <a href="/training" class=" hover:text-red-900 mr-4 underline">
                            Training</a>
                        <a href="/contact" class="hover:text-red-900 mr-4 ">
                            Contact</a>
                    </div>
                </div>
                <img @click="toggle()" src="{{ asset('Icons/Menu.svg') }}" alt="" class="md:hidden h-10 w-10" />
            </div>
        </nav>
    </header>
    {{-- menu --}}
    <div x-show="open" x-cloak x-transition class="fixed top-0 bg-red h-full w-full z-20 flex flex-col">
        <div class="w-full text-center flex justify-end mt-14 pr-10">
            <svg @click="toggle()" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="3.0" stroke="currentColor" class="w-8 h-8 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
        <div class="m-24 flex flex-col mb-5 ml-8">
            <div class="flex text-4xl pb-16 text-white font-garalama">
                <a href="/" class="justify-center hover:text-amber-200 ">HOME</a>
            </div>
            <div class="flex text-4xl pb-16 text-white font-garalama">
                <a href="/about" class="justify-center hover:text-amber-200">ABOUT</a>
            </div>
            <div class="flex text-4xl pb-16 text-white font-garalama">
                <a href="#" class="justify-center hover:text-amber-200 underline">TRAINING</a>
            </div>
            <div class="flex text-4xl pb-16 text-white font-garalama">
                <a href="/contact" class="justify-center hover:text-amber-200">CONTACT</a>
            </div>
        </div>
    </div>
    {{-- end menu --}}

    <div
        class="flex relative h-[450px] sm:h-[662px] md:h-[550px] xl:h-[660px] sm:flex sm:flex-col xsm:h-[576px] md:flex-row pr-3 ">
        <img src="/images/Images/Hero Images/joe-shields-dLij9K4ObYY-unsplash.jpg" alt=""
            class="h-[200px] xsm:h-[324px] sm:h-[390px] w-full object-left-top mix-blend-overlay z-0 md:hidden" />
        <div
            class="bg-grey z-10 absolute w-full pl-4 bottom-0 pb-8 pt-10 sm:relative xsm:pt-6 xsm:pl-14 md:pl-8 lg:pt-64 md:pt-40">
            <p class="txt-yellow font-cci text-lg">Training</p>
            <h1 class="text-red-700 font-garalama text-2xl xsm:text-4xl xsm:pt-4 md:hidden">
                SAFETY IN THE <br />ADMIST OF CHAOS
            </h1>
            <h1 class="text-red-700 font-garalama xsm:pt-4 hidden md:block md:text-xl lg:text-3xl txt-red xl:text-4xl">
                PAUSE AND THINK BEFORE YOU<br>CONNECT
            </h1>
            <p class="text-white font-cci font-ultrathin pt-2 pb-6 xsm:text-xl xsm:pt-4 xsm:pb-8 md:pb-10">
                Cybersecurity tips.
            </p>
        </div>
        <img src="/images/Images/Hero Images/joe-shields-dLij9K4ObYY-unsplash.jpg" alt=""
            class="hidden md:block w-1/2 md:w-[100%] h-\[400px\]]">
    </div>
    <div class="p-8 pt-16 pb-0 md:p-28 md:pb-0">
        <p class="font-cci text-lg sm:text-xl text-stone-600 lg:text-2xl">Cybercrime is an ongoing threat. <br><br>

            You might think that the only form of cybercrime you have to worry about is hackers stealing your financial information. But it may not be so simple. There are far more concerns than just basic financial ones. Cybercrime continues to evolve, with new threats surfacing every year. <br><br>

            When you hear and read about the range of cybercrimes out there, you might be tempted to stop using the internet entirely. That’s probably too drastic. <br><br>

            Instead, it’s a good idea to know how to recognize cybercrime, which can be the first step to helping protect yourself and your data. Taking some basic precautions and knowing who to contact when you see others engaged in criminal activities online are also important steps.<br><br> </p>
    </div>
    <div class="w-full pt-4 md:pt-4 p-8 md:flex md:justify-between md:p-28 md:pb-4 pb-0">
        <div>
            <h1 class="font-garalama text-red-800 text-xl lg:text-3xl xl:text-4xl font-medium pb-0 md:text-2xl">
                How to protect yourself against cybercrime
            </h1>
        </div>
    </div>
    <div class="p-8 pt-0 pb-0 md:p-28 md:pt-0 md:pb-14">
        <h3 class="text-xl font-garalama text-stone-800">1. Use strong passwords</h3>
        <p class="font-cci text-lg sm:text-xl text-stone-600 lg:text-2xl">Don’t repeat your passwords on different sites, and change your passwords regularly. Make them complex. That means using a combination of at least 10 letters, numbers, and symbols. Keep in mind, more complex your password, more difficult to crack it. </p>
    </div>
    <div class="p-8 pt-0 pb-0 md:p-28 md:pt-0 md:pb-14">
        <h3 class="text-xl font-garalama text-stone-800">2. Keep your software updated</h3>
        <p class="font-cci text-lg sm:text-xl text-stone-600 lg:text-2xl">This is especially important with your operating systems and internet security software. Cybercriminals frequently use known exploits, or flaws, in your software to gain access to your system. Patching those exploits and flaws can make it less likely that you’ll become a cybercrime target. </p>
    </div>
    <div class="p-8 pt-0 pb-0 md:p-28 md:pt-0 md:pb-14">
        <h3 class="text-xl font-garalama text-stone-800">3. Manage your social media settings</h3>
        <p class="font-cci text-lg sm:text-xl text-stone-600 lg:text-2xl">Keep your personal and private information locked down. Social engineering cybercriminals can often get your personal information with just a few data points, so the less you share publicly, the better. For instance, if you post your pet’s name or reveal your mother’s maiden name, you might expose the answers to two common security questions. </p>
    </div>
    <div class="p-8 pt-0 pb-0 md:p-28 md:pt-0 md:pb-14">
        <h3 class="text-xl font-garalama text-stone-800">4. Talk to your children about the internet</h3>
        <p class="font-cci text-lg sm:text-xl text-stone-600 lg:text-2xl">You can teach your kids about acceptable use of the internet without shutting down communication channels. Make sure they know that they can come to you if they’re experiencing any kind of online harassment, stalking, or bullying. </p>
    </div>
    <div class="p-8 pt-0 pb-0 md:p-28 md:pt-0 md:pb-14">
        <h3 class="text-xl font-garalama text-stone-800">5. Know that identity theft can happen anywhere</h3>
        <p class="font-cci text-lg sm:text-xl text-stone-600 lg:text-2xl">It’s smart to know how to protect your identity even when traveling. There are a lot of things you can do to help keep criminals from getting your private information on the road. These include keeping your travel plans off social media and being using a VPN when accessing the internet over your hotel’s Wi-Fi network. </p>
    </div>
    <div class="p-8 pt-0 pb-12 md:p-28 md:pt-0 md:pb-14">
        <h3 class="text-xl font-garalama text-stone-800">6. Keep up to date on major security breaches anywhere</h3>
        <p class="font-cci text-lg sm:text-xl text-stone-600 lg:text-2xl">If you do business with a merchant or have an account on a website that’s been impacted by a security breach, find out what information the hackers accessed and change your password immediately. </p>
    </div>



    {{-- <div class="my-12 mx-8">
        <h1 class=" font-garalama text-3xl ">REACH FOR EXPERT'S HELP WHEN NEEDED</h1>
        <div class=" md:flex">
            <img src="{{ asset('images/Images/services/Cybercrime-Photo.jpg') }}" alt=""
                class=" md:order-last m-auto h-52 w-96 sm:w-[90%] sm:h-72 md:w-96 md:h-72 lg:h-70 md:place-self-start md:m-0">
            <p class=" md:mr-4 md:order-first mt-6 text-lg text-stone-600 font-cci sm:text-xl lg:text-2xl">What makes cyber crime different from other crimes is that the use of internet and technoloy makes the criminal almost invisible. If </p>
        </div>

    </div> --}}



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
