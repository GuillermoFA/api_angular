import { Component, OnInit } from '@angular/core';
import { ApiService } from 'src/app/api.service';
import { User } from 'src/app/user';

@Component({
  selector: 'app-table',
  templateUrl: './table.component.html',
  styleUrls: ['./table.component.css']
})
export class TableComponent implements OnInit{
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
