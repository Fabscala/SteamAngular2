/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { TopJeuxComponent } from './top-jeux.component';

describe('TopJeuxComponent', () => {
  let component: TopJeuxComponent;
  let fixture: ComponentFixture<TopJeuxComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ TopJeuxComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(TopJeuxComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
