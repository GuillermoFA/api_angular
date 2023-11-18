export interface User {
  id: number;
  name: string;
  user_interest: UserInterest[];
  user_framework: UserFramework[];
  user_info_user: UserInfoUser[];
  user_data_personal: UserDataPersonal[];
  user_data_u_r_l: UserUrlSocial[];
}

export interface UserInterest {
  id: number;
  interes: string;
  user_id: number;
}

export interface UserFramework {
  id: number;
  framework: string;
  avance: string;
  user_id: number;
}

export interface UserInfoUser {
  id: number;
  titulo: string;
  contenido: string;
  user_id: number;
}

export interface UserDataPersonal {
  id: number;
  edad: number;
  pais: string;
  ciudad: string;
  email: string;
  user_id: number;
}

export interface UserUrlSocial{
  id: number;
  url: string;
  user_id: number;
}
