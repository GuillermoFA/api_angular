import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ProfileComponent } from './view/profile/profile.component';

const routes: Routes = [{
  path:'',redirectTo:'/profile',pathMatch:'full'},
{path: 'profile',component: ProfileComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
