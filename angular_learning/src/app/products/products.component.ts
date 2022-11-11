import { Component, OnInit } from '@angular/core';
import { ProductsService } from './product.service';

@Component({
  selector: 'app-products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.scss']
})
export class ProductsComponent implements OnInit {

  public products: {id: number, name: string, status: string}[] = [];

  constructor(private productsService: ProductsService) { }

  ngOnInit() {
    this.products = this.productsService.getProducts();
  }

}
