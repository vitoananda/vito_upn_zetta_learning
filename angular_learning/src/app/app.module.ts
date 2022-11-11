import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule } from '@angular/forms';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { AccountService } from './account.service';
import { LoggingService } from './logging.service';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { MatButtonModule} from '@angular/material/button';
import { HomeComponent } from './home/home.component';
import { ManagersComponent } from './managers/managers.component';
import { ManagerComponent } from './managers/manager/manager.component';
import { ProductsComponent } from './products/products.component';
import { EditProductsComponent } from './products/edit-products/edit-products.component';
import { ProductComponent } from './products/product/product.component';

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    ManagersComponent,
    ManagerComponent,
    ProductsComponent,
    EditProductsComponent,
    ProductComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    BrowserAnimationsModule,
    MatButtonModule,

  ],
  providers: [AccountService, LoggingService],
  bootstrap: [AppComponent]
})
export class AppModule { }
