import { Component, OnInit } from '@angular/core';
import { ProductsService } from '../product.service';

@Component({
  selector: 'app-product',
  templateUrl: './product.component.html',
  styleUrls: ['./product.component.scss']
})
export class ProductComponent implements OnInit {

  product: {id: number, name: string, status: string};

  constructor(private productService: ProductsService) { }

  ngOnInit() {
    this.product = this.productService.getProduct(1);
  }

}
