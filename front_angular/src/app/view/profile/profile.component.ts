import { Component, OnInit } from '@angular/core';
import { ApiService } from 'src/app/api.service';
import { User } from 'src/app/user';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.css']
})
export class ProfileComponent implements OnInit{
  user?: User;

  constructor(private apiService: ApiService){}


  ngOnInit(): void {
    this.apiService.getUser().subscribe(
      (data) => {
        if (data) {
          this.user = data;
          console.log(data);
        } else {
          console.error('Received null or undefined data');
        }
      },
      (error) => {
        console.error('Error fetching user data', error);
      }
    );
  }


}
