 <nav class="app-nav">
     <div class="item">
         <a href="{{ route('admin.dashboard') }}">Dashboard</a>
     </div>
     <div class="item">
         <a href="{{ route('trainees.index') }}">Trainees</a>
     </div>
     <div class="item">
         Sponsors
         <div class="menu">
             <div class="item">
                 <a href="{{ route('sponsors.index') }}">List</a>
             </div>
             <div class="item">
                 <a href="{{ route('sponsors.create') }}">Create</a>
             </div>
         </div>
     </div>
     <div class="item">
         Trainings
         <div class="menu">
             <div class="item">
                 <a href="{{ route('trainings.index') }}">
                     List
                 </a>
             </div>
             <div class="item">
                 <a href="{{ route('trainings.create') }}">Create</a>
             </div>
             <div class="item">
                 <a href="{{ route('trainings.assign-trainees') }}">Assign trainees</a>
             </div>
         </div>
     </div>
     <div class="item">
         <a href="{{ route('companies.index') }}">Companies</a>
     </div>
     <div class="item">
         Funds help
         <div class="menu">
             <div class="item">
                 <a href="{{ route('fundsHelp.index') }}">List</a>
             </div>
             <div class="item">
                 <a href="{{ route('fundsHelp.create') }}">Create</a>
             </div>
             <div class="item">
                 <a href="{{ route('fundsHelp.grant') }}">Grant fund help</a>
             </div>
             <div class="item">
                 <a href="{{ route('fundsHelp.grant-list') }}">
                     People who have obtained an aid fund
                 </a>
             </div>
         </div>
     </div>
     <div class="item">
         <a href="{{ route('fundings.index') }}">Funding</a>
     </div>
 </nav>
