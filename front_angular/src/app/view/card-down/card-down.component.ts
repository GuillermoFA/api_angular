import { Component, OnInit } from '@angular/core';
import { ApiService } from 'src/app/api.service';
import { User } from 'src/app/user';

@Component({
  selector: 'app-card-down',
  templateUrl: './card-down.component.html',
  styleUrls: ['./card-down.component.css']
})
export class CardDownComponent implements OnInit{

  constructor(private apiService: ApiService){}

  user?:User;

  ngOnInit(): void {
    this.apiService.getUser().subscribe(
      (data) => {
        if (data) {
          this.user = data;

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


