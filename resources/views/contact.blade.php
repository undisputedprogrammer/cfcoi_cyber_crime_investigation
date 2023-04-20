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
                    class=" hover:text-red-900 mr-4  text-center underline-offset-8"
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
                    class="hover:text-red-900 mr-4 underline"
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
            <a href="/" class="justify-center hover:text-amber-200 ">HOME</a>
          </div>
          <div class="flex text-4xl pb-16 text-white font-garalama">
            <a href="/about" class="justify-center hover:text-amber-200">ABOUT</a>
          </div>
          <div class="flex text-4xl pb-16 text-white font-garalama">
            <a href="/training" class="justify-center hover:text-amber-200">TRAINING</a>
          </div>
          <div class="flex text-4xl pb-16 text-white font-garalama">
            <a href="#" class="justify-center hover:text-amber-200 underline">CONTACT</a>
          </div>
        </div>
      </div>
      {{-- end menu --}}

      <section id="contact">
        <div class="bg-dark-red py-20 md:flex">
            <div class=" basis-1/2">
        <div class=" mx-9 ">
            <h3 class="txt-yellow text-lg">CONTACT</h3>
            <h2 class="text-[2.3rem] text-white font-garalama font-semibold">CONNECT TO US &
                KNOW MORE</h2>
            <h3 class="text-white font-cci pt-7">Let’s have a chat.</h3>
        </div>

        <div class=" my-28 mx-9 ">
            <form id="form" onsubmit="formSubmit();return false" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col">
                    <label for="name" class="text-white font-garalama text-[1.8rem] font-light">FULL NAME</label>
                    <input id="name" name="name" type="text" required class=" h-16 bg-red mt-4 text-white text-2xl font-cci px-4">
                </div>
                <div class="flex flex-col mt-12">
                    <label for="company" class="text-white font-garalama text-[1.8rem]">COMPANY</label>
                    <input id="company" name="company" type="text"  class=" h-16 bg-red mt-4 text-white text-2xl font-cci px-4">
                </div>
                <div class="flex flex-col mt-12">
                    <label for="email" class="text-white font-garalama text-[1.8rem]">EMAIL ADDRESS</label>
                    <input id="email" name="email" type="email" required class=" h-16 bg-red mt-4 text-white text-2xl font-cci px-4">
                </div>
                <div class="flex flex-col mt-12">
                    <label for="phone" class="text-white font-garalama text-[1.8rem]">PHONE</label>
                    <input id="phone" name="phone" type="tel" pattern="[0-9]{10}"  required class=" h-16 bg-red mt-4 text-white text-2xl font-cci px-4">
                </div>
                <div class="flex flex-col mt-12">
                    <label for="message" class="text-white font-garalama text-[1.8rem]">MESSAGE</label>
                    <textarea id="message" name="message"  cols="50" rows="5" required class=" h-32 bg-red mt-4 text-white text-xl font-cci px-4 py-3"></textarea>
                </div>

                <button id="submit" type="submit" class=" mt-10 bg-white text-dark-red font-garalama text-[1.3rem] px-9 py-4">SEND MESSAGE</button>
            </form>
        </div>
        <div class="h-[1px] w-full bg-white md:hidden"></div>
            </div>


        <div class=" flex-col my-28 md:my-16 mx-9 basis-1/2">
            <h2 class="text-white font-garalama ">DISTRICT OFFICES</h2>
            <p class=" text-white font-cci text-2xl mt-12">Room No. 11, DCP Office, IP
                Extension Mandawali,
                Fazalpur, New Delhi – 110092</p>
            <div class=" flex mt-10">
                <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg " class=" text-white">
                    <path d="M17.7071 13.7071L20.3552 16.3552C20.7113 16.7113 20.7113 17.2887 20.3552 17.6448C18.43 19.57 15.3821 19.7866 13.204 18.153L11.6286 16.9714C9.88504 15.6638 8.33622 14.115 7.02857 12.3714L5.84701 10.796C4.21341 8.61788 4.43001 5.56999 6.35523 3.64477C6.71133 3.28867 7.28867 3.28867 7.64477 3.64477L10.2929 6.29289C10.6834 6.68342 10.6834 7.31658 10.2929 7.70711L9.27175 8.72825C9.10946 8.89054 9.06923 9.13846 9.17187 9.34373C10.3585 11.7171 12.2829 13.6415 14.6563 14.8281C14.8615 14.9308 15.1095 14.8905 15.2717 14.7283L16.2929 13.7071C16.6834 13.3166 17.3166 13.3166 17.7071 13.7071Z" stroke="white"/>
                    </svg><p class=" font-cci text-white text-2xl ml-3">0111-22334567</p>
            </div>
            <div class="flex text-white mt-8">
                <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="4" y="6" width="16" height="12" rx="2" stroke="white"/>
                    <path d="M4 9L11.1056 12.5528C11.6686 12.8343 12.3314 12.8343 12.8944 12.5528L20 9" stroke="white"/>
                    </svg> <a href="#" class=" font-cci text-2xl ml-3 bg-t-yellow ">investigation@cybercrime.in</a>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.0372360062634!2d77.24067291500896!3d28.62864608241929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfcd500e13dd3%3A0x3a162f51a38736f5!2sDelhi%20Police%20headquarters!5e0!3m2!1sen!2sin!4v1679974785963!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mt-12 hidden md:block w-full h-[560px] xl:h-[540px]"></iframe>



            <div id="spinner" class=" center w-[250px] h-[95px] hidden">

                <div role="status" class="flex bg-slate-200 px-10 py-6">
                    <svg aria-hidden="true" class="inline w-12 h-12 mr-4 text-gray-200 animate-spin dark:text-gray-600 fill-red-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                    </svg>
                    <h1 class=" font-semibold  text-xl font-garalama">Sending...</h1>
                </div>

            </div>



        </div>

    </div>
      </section>

      <div id="success-alert" class="w-full fixed top-[35%] w3-animate-zoom hidden ">

        <div class=" flex flex-col mx-auto w-[270px] lg:w-[380px] text-white px-6 py-4 border-0 rounded relative mb-4 bg-slate-100">
            <span class="text-xl  mx-auto ">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="50px" height="50px" fill-rule="nonzero"><g fill="#27d814" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25,2c-12.683,0 -23,10.317 -23,23c0,12.683 10.317,23 23,23c12.683,0 23,-10.317 23,-23c0,-4.56 -1.33972,-8.81067 -3.63672,-12.38867l-1.36914,1.61719c1.895,3.154 3.00586,6.83148 3.00586,10.77148c0,11.579 -9.421,21 -21,21c-11.579,0 -21,-9.421 -21,-21c0,-11.579 9.421,-21 21,-21c5.443,0 10.39391,2.09977 14.12891,5.50977l1.30859,-1.54492c-4.085,-3.705 -9.5025,-5.96484 -15.4375,-5.96484zM43.23633,7.75391l-19.32227,22.80078l-8.13281,-7.58594l-1.36328,1.46289l9.66602,9.01563l20.67969,-24.40039z"></path></g></g></svg>
            </span>
            <h3 class=" text-center text-emerald-600 font-cci text-[1rem] lg:text-xl font-bold">Mail has been sent</h3>
            <h3 class="text-center text-black font-cci text-[0.8rem] lg:text-lg font-semibold">Our team will follow up with you soon...</h3>
            <button id="close-alert" class="font-garalama bg-emerald-600 text-white px-3 py-1">Close</button>
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


    <script>

        let form= document.getElementById('form');
        let spinner = document.getElementById('spinner');
        let submitBtn = document.getElementById('submit');
        let alert=document.getElementById('success-alert');
        let closeAlert=document.getElementById('close-alert');
        let name=document.getElementById('name').value;
        let email=document.getElementById('email').value;
        let phone=document.getElementById('phone').value;
        let message=document.getElementById('message').value;


        closeAlert.addEventListener('click',function(){
            alert.classList.toggle('hidden');
            form.reset();
        })

        function formSubmit(){
            console.log(document.getElementById('name').value);
            console.log(name);
            submitBtn.disabled = true;
            spinner.classList.toggle('hidden');
            sendmail();
        }

        function sendmail(){
            axios.post('/api/send', {
                            name: document.getElementById('name').value,
                            email: document.getElementById('email').value,
                            phone : document.getElementById('phone').value,
                            message: document.getElementById('message').value,
                        }, {
                            headers: {
                                "Content-Type": "multipart/form-data",
                            },
                        }).then(function(response) {

                                spinner.classList.toggle('hidden');
                                alert.classList.toggle('hidden');

                            })
                            .catch(function(error) {


                            });
        }
        </script>

</body>



</html>
