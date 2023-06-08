   <aside class="side">
       <div class="sidebar">
           <div class="container-img">
               <img src="../ProgFUN/assets/img/sidetopcpp.png" alt="" />
               <img src="../ProgFUN/assets/img/logo-cpp.png" alt="" />
           </div>
           <div class="list-side">
               <a href="" class="btn-side" id="intro">C++ Intro</a>
               <a href="" class="btn-side">C++ Get Started</a>
               <a href="" class="btn-side">C++ Syntax</a>
               <a href="" class="btn-side">C++ Output</a>
               <a href="" class="btn-side">C++ Comments</a>
               <a href="" class="btn-side">C++ Variables</a>
               <a href="" class="btn-side">C++ User Input</a>


           </div>
       </div>
   </aside>
   <script>
       btnlist = document.querySelectorAll('.btn-side')
       btnlist.forEach(btnlistvar => {
           btnlistvar.addEventListener('click', () => {
               document.querySelector('.special')?.classList.remove('special');
               btnlistvar.classList.add('special');
           })
       });
   </script>