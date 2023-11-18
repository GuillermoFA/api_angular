import { Component, OnInit } from '@angular/core';
import { ApiService } from 'src/app/api.service';
import { User } from 'src/app/user';

@Component({
  selector: 'app-card',
  templateUrl: './card.component.html',
  styleUrls: ['./card.component.css']
})
export class CardComponent implements OnInit{
  user?: User;

  constructor(private apiService: ApiService){}


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
