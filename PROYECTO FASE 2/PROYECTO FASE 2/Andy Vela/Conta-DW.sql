USE [Conta-DW]
GO
/****** Object:  Table [dbo].[Datos_Empleado]    Script Date: 17/10/2020 21:45:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Datos_Empleado](
	[ID_Empleado] [int] NULL,
	[Puesto] [nvarchar](100) NULL,
	[Departamento] [nvarchar](100) NULL,
	[Nombre_Empleado] [nvarchar](100) NULL
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Mercaderias]    Script Date: 17/10/2020 21:45:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Mercaderias](
	[ID_Proveedor] [int] NULL,
	[Descripcion_Merca] [nvarchar](100) NULL,
	[Cantidad] [nvarchar](50) NULL,
	[Costo_Factura] [nvarchar](100) NULL,
	[Forma_Pago] [nvarchar](100) NULL
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Pagos_Impuestos]    Script Date: 17/10/2020 21:45:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Pagos_Impuestos](
	[IVA_Pagar] [nvarchar](50) NULL,
	[IVA_Cobrar] [nvarchar](50) NULL,
	[ISR] [nvarchar](50) NULL,
	[IGSS] [nvarchar](50) NULL,
	[IRTRA] [nvarchar](50) NULL,
	[INTECAP] [nvarchar](50) NULL
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Proveedores]    Script Date: 17/10/2020 21:45:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Proveedores](
	[ID_Proveedores] [int] NULL,
	[Nombre] [nvarchar](100) NULL,
	[Direccion] [nvarchar](100) NULL
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Publicidad]    Script Date: 17/10/2020 21:45:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Publicidad](
	[ID_Proveedor] [int] NULL,
	[Proveedor] [nvarchar](50) NULL,
	[Tipo_Marketing] [nvarchar](100) NULL,
	[Costo] [nvarchar](100) NULL,
	[Forma_Pago] [nvarchar](100) NULL
) ON [PRIMARY]

GO
INSERT [dbo].[Datos_Empleado] ([ID_Empleado], [Puesto], [Departamento], [Nombre_Empleado]) VALUES (1, N'Supervisor', N'Administrativo', N'Carlos Garcia')
INSERT [dbo].[Datos_Empleado] ([ID_Empleado], [Puesto], [Departamento], [Nombre_Empleado]) VALUES (2, N'Asistente', N'Administrativo', N'Lorena Lopez')
INSERT [dbo].[Datos_Empleado] ([ID_Empleado], [Puesto], [Departamento], [Nombre_Empleado]) VALUES (3, N'Asesor', N'Ventas', N'Walter Navarro')
INSERT [dbo].[Mercaderias] ([ID_Proveedor], [Descripcion_Merca], [Cantidad], [Costo_Factura], [Forma_Pago]) VALUES (1, N'Teclados Mecanicos', N'24', N'18000', N'Contado')
INSERT [dbo].[Mercaderias] ([ID_Proveedor], [Descripcion_Merca], [Cantidad], [Costo_Factura], [Forma_Pago]) VALUES (2, N'WebCam', N'12', N'3600', N'Credito')
INSERT [dbo].[Pagos_Impuestos] ([IVA_Pagar], [IVA_Cobrar], [ISR], [IGSS], [IRTRA], [INTECAP]) VALUES (N'850.00', N'450.00', N'320.00', N'750.00', N'250.00', N'250.00')
INSERT [dbo].[Proveedores] ([ID_Proveedores], [Nombre], [Direccion]) VALUES (1, N'Razer', N'Estados Unidos')
INSERT [dbo].[Proveedores] ([ID_Proveedores], [Nombre], [Direccion]) VALUES (2, N'Logitech', N'Costa Rica')
INSERT [dbo].[Publicidad] ([ID_Proveedor], [Proveedor], [Tipo_Marketing], [Costo], [Forma_Pago]) VALUES (1, N'CCSR', N'Spot', N'850.00', N'Contado')
INSERT [dbo].[Publicidad] ([ID_Proveedor], [Proveedor], [Tipo_Marketing], [Costo], [Forma_Pago]) VALUES (2, N'RYM', N'Promocion', N'600.00', N'Credito')
