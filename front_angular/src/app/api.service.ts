import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { User } from './user';

@Injectable({
  providedIn: 'root'
})
export class ApiService {

  private urlAPI = 'http://127.0.0.1:8000/api/profiles/1';

  constructor(private http:HttpClient) { }


  getUser(): Observable<User>{
    return this.http.get<User>(this.urlAPI)
  }



}
