import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CardDownComponent } from './card-down.component';

describe('CardDownComponent', () => {
  let component: CardDownComponent;
  let fixture: ComponentFixture<CardDownComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [CardDownComponent]
    });
    fixture = TestBed.createComponent(CardDownComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
