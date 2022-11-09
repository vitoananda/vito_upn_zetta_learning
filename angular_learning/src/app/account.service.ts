import { Injectable } from "@angular/core";
import { LoggingService } from "./logging.service";
@Injectable()
export class AccountService {
    accounts = [
        {
          name: 'Master Account',
          status: 'active'
        },
        {
          name: 'Test account',
          status: 'inactive'
        },
        {
          name: 'Hidden Account',
          status: 'unknown'
        }
      ];

      constructor(private loggingService: LoggingService) {}

      addAccount(name: string, status: string){
        this.accounts.push({name: name,status:status});
      }

      updateStatus(id: number,status:string){
        this.accounts[id].status = status;
      }
}
 
