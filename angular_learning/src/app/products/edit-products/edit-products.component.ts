import { Component, OnInit } from '@angular/core';
import { ProductsService } from '../product.service';

@Component({
  selector: 'app-edit-products',
  templateUrl: './edit-products.component.html',
  styleUrls: ['./edit-products.component.scss']
})
export class EditProductsComponent implements OnInit {

  product: {id: number, name: string, status: string};
  productName = '';
  productStatus = '';

  constructor(private productsService: ProductsService) { }

  ngOnInit() {
    this.product = this.productsService.getProduct(1);
    this.productName = this.product.name;
    this.productStatus = this.product.status;
  }

  onUpdateProduct() {
    this.productsService.updateProduct(this.product.id, {name: this.productName, status: this.productStatus});
  }

}
